<?php

if(PHP_SAPI != 'cli' || $argc < 1){
    exit('only console using');
}

if(
    $argc < 3 ||
    strlen($argv[1]) < 1 ||
    !is_file($argv[1]) ||
    strlen($argv[2]) < 1 ||
    !is_dir($argv[2])
){
    exit(
        "\n" .
        'Usage: php convertMetadataToCustom.php <path_to_metadata.json> <output_path_to_file> <base API URL>' . "\n" .
        'Where:' . "\n" .
        "    <path_to_metadata.json> is path to metadata file\n" .
        "    <output_path_to_file> is path to folder for output custom file\n" .
        "    <base API URL> not required param, base api for vendor URL\n\n"
    );
}

//---------------//
//-- TO Custom --//
//---------------//
ob_start();
include_once $argv[1];
$array = ob_get_contents();
ob_end_clean();

$array = json_decode($array, true);
if(json_last_error() != 0) {
    exit(
        "\n" .
        "! JSON syntax error\n" .
        "  Message: " . json_last_error_msg() .
        "\n\n"
    );
}

$outputDir = '';
if(is_dir($argv[2])){
    $outputDir = rtrim($argv[2], '/\/');
    $outputDir .= DIRECTORY_SEPARATOR;
}else{
    exit(
        "\n" .
        "! Error\n" .
        '  folder ' . $argv[2] . ' dosen\'t exist' .
        "\n\n"
    );
}

$baseApi = (isset($argv[3]) && strlen($argv[3])>0)?$argv[3]:'';
$custom = [];
foreach($array['blocks'] as $block){
    foreach($block['args'] as $arg) {
        $custom[$block['name']]['dictionary'][$arg['name']] = $arg['name'];
    }
    $custom[$block['name']]['vendorUrl'] = $baseApi;
    $custom[$block['name']]['method'] = 'POST';
    $custom[$block['name']]['wrap'] = '';
}
$custom = var_export($custom, true);
file_put_contents($outputDir . 'custom.php', '<?php ' . "\n" . 'return ' . $custom . ';');