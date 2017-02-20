<?php

namespace Core;
use \Core\CustomModel;
if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Base Model
 */
class Router
{
    private $packageName;
    private $blocks;
    private $custom;
    private $klein;

    public function __construct(
        $packageName,
        $blocks,
        $custom
    )
    {
        $this->packageName = $packageName;
        $this->blocks = $blocks;
        $this->custom = $custom;
        $this->klein = new \Klein\Klein();
        $this->http = new \GuzzleHttp\Client(['verify' => false]);
    }

    public function setup()
    {
        // Metatdata
        // api/<Package_name>/
        $this->klein->respond('GET', INDEX_PATH . 'api/' . $this->packageName . '/?', function(){
            include_once dirname(__DIR__) . '/metadata/metadata.json';
        });
        // Set all routes
        foreach($this->blocks as $blockSettings){
            $this->setRoute($blockSettings);
        }
    }

    public function run($dispatchSettings = [])
    {
        // Run router
        if(count($dispatchSettings)>0){
            $this->klein->dispatch($dispatchSettings);
        }else{
            $this->klein->dispatch();
        }
        // Set status 200
        $this->klein->response()->unlock();
        $this->klein->response()->code(200);
    }

    public function getRouter()
    {
        return $this->klein;
    }

    private function setRoute($block)
    {
        // Get method for vendor route
        if(
            isset($this->custom[$block['name']]['method'])&&
            in_array($this->custom[$block['name']]['method'], ['GET'])
        ){
            $method = $this->custom[$block['name']]['method'];
        }else{
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
            $result['contextWrites']['to']['status_msg'] = 'Wrong metadata format custom block Method is miss in ' . $block['name'] . '.';
            echo json_encode($result);
            exit(200);
        }

        // Prepare vars need for route processing
        $param = $this->getParam($block);
        $routePath = INDEX_PATH . 'api/' . $this->packageName . '/' . $block['name'] . '/?';
        $blockName = $block['name'];
        $blockCustom = $this->custom[$block['name']];

        // Add route
        $this->klein->respond('POST', $routePath, function()use($param, $blockName, $blockCustom, $method){
            // Get input param
            $inputPram = $this->getInputPram($param['param']);
            if(is_string($inputPram)){
                echo $inputPram;
                exit(200);
            }
            
            // Validate param as reqiured and/or json
            $validateResult = $this->validateParam($inputPram, $param['required'], $param['json']);
            if($validateResult){
                echo $validateResult;
                exit(200);
            }

            // Put param in Vendor Url if it need
            $vendorUrl = $blockCustom['vendorUrl'];
            $urlPart = [];
            preg_match_all('/\{\{[0-9a-z_]+\}\}/ui', $vendorUrl, $urlPart);
            if(count($urlPart[0])>0){
                foreach ($urlPart[0] as $onePart) {
                    $oneUrlPart = str_replace('}}', '', str_replace('{{', '', $onePart));
                    if (isset($inputPram[$oneUrlPart])&&strlen($inputPram[$oneUrlPart])>0) {
                        $paramVal = $inputPram[$oneUrlPart];
                        if($oneUrlPart=='expression'&&$paramVal!='0'){
                            $paramVal=str_replace(' ', '', $paramVal);
                            $paramVal=urlencode($paramVal);
                        }
                        $vendorUrl = str_replace('{{' . $oneUrlPart . '}}', $paramVal, $vendorUrl);
                    } else {
                        $response = [];
                        $response['callback'] = 'error';
                        $response['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
                        $response['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
                        $response['contextWrites']['to']['fields'] = [$oneUrlPart];

                        echo json_encode($response);
                        exit(200);
                    }
                }
            }

            // Prepare param
            $sendParam = $this->prepareParam($inputPram, $blockCustom['dictionary'], $blockName);
            // remove accessToken from param list, for sent as header
            $accessToken = '';
            if(isset($sendParam['accessToken'])){
                $accessToken = $sendParam['accessToken'];
                unset($sendParam['accessToken']);
            }
            $appClientId = (isset($sendParam['appClientId']))?$sendParam['appClientId']:'';
            $sendBody = $sendParam;
            // If need, custom make custom processing for route
            if(isset($blockCustom['custom'])&&$blockCustom['custom'] == true){
                $sendBody = CustomModel::$blockName($sendParam, $this->custom[$blockName], $vendorUrl);
            }else{
                unset($sendBody['appClientId']);
                if(isset($this->custom[$blockName]['showApiType'])&&$this->custom[$blockName]['showApiType']==true){
                    $sendBody['api_type'] = 'json';
                }
                $sendBody = json_encode($sendBody);
            }

            // Make request
            $result = $this->httpRequest($vendorUrl, $method, $accessToken, $appClientId, $sendBody);
            echo json_encode($result);
            exit(200);
        });
        return true;
    }

    // Get param, required and JSON from url
    private function getParam($block)
    {
        $param = [];
        $required = [];
        $json = [];
        foreach($block['args'] as $oneParam){
            if($oneParam['required']){
                array_push($required, $oneParam['name']);
            }
            if($oneParam['type'] == 'JSON'){
                array_push($json, $oneParam['name']);
            }
            array_push($param, $oneParam['name']);
        }
        return [
            'param' => $param,
            'required' => $required,
            'json' => $json,
        ];
    }

    private function getInputPram($paramList)
    {
        $requestBody = file_get_contents('php://input');
        if(strlen($requestBody)>0){
            $requestBody = $this->normalizeJson($requestBody);
            $requestBody = str_replace('\"', '"', $requestBody);
            $requestBody = json_decode($requestBody, true);
            if(json_last_error() != 0) {
                $response = [];
                $response['callback'] = 'error';
                $response['contextWrites']['to']['status_code'] = 'JSON_VALIDATION';
                $response['contextWrites']['to']['status_msg'] = "Syntax error. Incorrect input JSON. Please, check fields withJSON input. " . json_last_error_msg();
                return json_encode($response);
            }
            $jsonParam = $requestBody['args'];
            $param = [];
            foreach($paramList as $oneParam){
                $param[$oneParam] = (isset($jsonParam[$oneParam]))?$jsonParam[$oneParam]:false;
            }

            return $param;
        }else{
            return [];
        }
    }

    protected function validateParam($inputParam, $requiredPram = [], $jsonParams = [])
    {
        if(count($requiredPram)>0){
            $requiredPramCheck = [];
            foreach($requiredPram as $oneParam){
                if(!isset($inputParam[$oneParam]) || $inputParam[$oneParam] === false){
                    array_push($requiredPramCheck, $oneParam);
                }
            }
            if(count($requiredPramCheck)>0){
                $response = [];
                $response['callback'] = 'error';
                $response['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
                $response['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
                $response['contextWrites']['to']['fields'] = $requiredPramCheck;

                return json_encode($response);
            }
        }
        if(count($jsonParams)>0){
            $jsonParamsCheck = [];
            foreach($jsonParams as $oneParam){
                if(isset($inputParam[$oneParam]) && $inputParam[$oneParam] != false){
                    if(!is_array($inputParam[$oneParam])) {
                        array_push($jsonParamsCheck, $oneParam);
                    }
                }
            }
            if(count($jsonParamsCheck)>0){
                $response = [];
                $response['callback'] = 'error';
                $response['contextWrites']['to']['status_code'] = 'JSON_VALIDATION';
                $response['contextWrites']['to']['status_msg'] = "Syntax error. Incorrect input JSON. Please, check fields withJSON input.";
                $response['contextWrites']['to']['fields'] = $jsonParamsCheck;

                return json_encode($response);
            }
        }

        return false;
    }

    private function prepareParam($inputParam, $dictionary, $blockName)
    {
        $result = [];
        foreach($inputParam as $paramName => $paramVal){
            if(is_numeric($paramVal)){
                $paramVal = intval($paramVal);
            }
            if($paramName=='expression'&&$paramVal!='0'){
                $paramVal = urlencode($paramVal);
            }
            if(count($dictionary)>0) {
                if ($paramVal != false && isset($dictionary[$paramName])) {
                    $result[$dictionary[$paramName]] = $paramVal;
                }
            }else{
                if ($paramVal != false) {
                    $result[$paramName] = $paramVal;
                }
            }
        }

        return $result;
    }

    protected function httpRequest($url, $method, $accessToken, $appClientId, $sendBody)
    {
        if($sendBody == '[]' || $sendBody == '{}'){
            $sendBody = '';
        }

        $result = [];
        try {
            // Setup client
            $clientSetup = [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ] ];

            $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;
            $clientSetup['headers']['User-Agent'] = 'RapidAPI-' . $appClientId;

            if($method == 'GET'){
                $clientSetup['query'] = json_decode($sendBody, true);
            }else{
                $clientSetup['form_params'] = json_decode($sendBody, true);
            }

            $vendorResponse = $this->http->request($method, $url, $clientSetup);
            $responseBody = $vendorResponse->getBody()->getContents();

            if($responseBody === 'true'||$responseBody==='false'){
                $responseBody = json_encode($responseBody);
            }

            if($responseBody === '{"json": {"errors": []}}'){
                $responseBody = json_encode('success');
            }

            $result['callback'] = 'success';
            if(empty(json_decode($responseBody))&&strlen($responseBody)==0) {
                $result['contextWrites']['to'] = 'success' . $responseBody;
            } else {
                $result['contextWrites']['to'] = json_decode($responseBody, true);
            }
        } catch (\GuzzleHttp\Exception\ClientException $exception) {
            $responseBody = $exception->getResponse()->getBody()->getContents();
            if(empty(json_decode($responseBody))) {
                $out = $responseBody;
            } else {
                $out = json_decode($responseBody, true);
            }
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = $out;
        } catch (\GuzzleHttp\Exception\UnhandledException $exception) {
            $responseBody = $exception->getResponse()->getBody()->getContents();
            if(empty(json_decode($responseBody))) {
                $out = 'API_ERROR' . $responseBody;
            } else {
                $out = json_decode($responseBody, true);
            }
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = $out;
        } catch (\GuzzleHttp\Exception\ServerException $exception) {
            $responseBody = $exception->getResponse()->getBody()->getContents();
            if(empty(json_decode($responseBody))) {
                $out = 'API_ERROR' . $responseBody;
            } else {
                $out = json_decode($responseBody, true);
            }
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = $out;
        } catch (\GuzzleHttp\Exception\ConnectException $exception) {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
            $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';
        }

        return $result;
    }

    private function normalizeJson($jsonObject)
    {
        return preg_replace_callback('~"([\[{].*?[}\]])"~s', function($match){
            return preg_replace('~\s*"\s*~', "\"", $match[1]);
        }, $jsonObject);
    }
}