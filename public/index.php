<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Core\Router;

header('Content-type: application/json');
http_response_code (200);
define('RAPID_IN', TRUE);

$inPath = trim(str_replace('index.php', '', trim($_SERVER['SCRIPT_NAME'], '\/\\' )), '\/\\');
if( strlen(trim($inPath)) > 0){
    define('INDEX_PATH', '/' . $inPath . '/');
}else{
    define('INDEX_PATH', '/');
}
define('APP_PATH', __DIR__);
define('HTTP_HOST', $_SERVER['HTTP_HOST']);

// Include metadata array
$settings = include dirname(APP_PATH) . '/src/metadata/vendor.php';

if(
    !isset($settings['package']) ||
    !isset($settings['blocks']) ||
    !is_array($settings['blocks']) ||
    !isset($settings['custom'])
){
    throw new Exception('Wrong vendor.php format \'package\', \'blocks\' or \'customBlocksHandlers\' in root is miss');
}
$router = new Router($settings['package'], $settings['blocks'], $settings['custom']);
$router->setup();
$router->run();
http_response_code(200);
exit(200);
