<?php
/**
 * Created by PhpStorm.
 * User: Igor Zakutynsky
 * Date: 17.07.17
 * Time: 11:24
 */

namespace Models;

require_once('normalizeJson.php');
/**
 * Class Metadata
 * @package models/metadata
 */
class Metadata
{
    /**
     * @var array
     */
    public $serviceField = [
        'vendorName',
        'url',
        "request",
        'method',
        'paramsType',
        'bodyInclude',
        'requestParameters',
        'vendorSchema',
        'vendorRequest'
    ];

    /**
     * @var
     */
    private $schema;

    /**
     * Metadata constructor.
     * @param $schema
     */
    function __construct($schema)
    {
        $this->schema = json_decode($schema, true);
    }

    /**
     * @return string
     */
    public function create()
    {
        foreach ($this->schema['blocks'] as $key=>$block){
            foreach ($block['args'] as $number=>$arg){
                foreach ($this->serviceField as $deprecateField){
                    if(array_key_exists($deprecateField, $arg)){
                        unset($this->schema['blocks'][$key]['args'][$number][$deprecateField]);
                    }
                }
            }

            foreach ($this->serviceField as $deprecateField){
                if(array_key_exists($deprecateField, $block)){
                    unset($this->schema['blocks'][$key][$deprecateField]);
                }
            }
        }

        return $this->schema;
    }
}