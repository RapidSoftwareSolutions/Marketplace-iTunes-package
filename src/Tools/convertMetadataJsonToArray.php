<?php

if(PHP_SAPI != 'cli' || $argc < 1){
    exit('only console using');
}

if(
    $argc < 3 ||
    strlen($argv[1]) < 1 ||
    !is_file($argv[1]) ||
    strlen($argv[2]) < 1 ||
    !is_file($argv[2])
){
    exit(
        "\n" .
        'Usage: php convertMetadataArrayToJson.php <path_to_file> <path_to_custom_file> <output_folder_path>' . "\n" .
        'Where:' . "\n" .
        "    <path_to_file> is full path to metadata file\n" .
        "    <path_to_custom_file> is full path to custom file\n" .
        "    <output_folder_path> not required, full path to folder for output metadata file\n\n"
    );
}
$outputDir = '';
if(isset($argv[3])){
    if(is_dir($argv[3])){
        $outputDir = rtrim($argv[3], '/\/');
        $outputDir .= DIRECTORY_SEPARATOR;
    }else{
        exit(
            "\n" .
            "! Error\n" .
            '  folder ' . $argv[3] . ' dosen\'t exist' .
            "\n\n"
        );
    }
}

//--------------//
//-- TO ARRAY --//
//--------------//
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

$custom = include_once $argv[2];
$array['custom'] = $custom;
$array = var_export($array, true);
file_put_contents($outputDir . 'vendor.php', '<?php ' . "\n" . 'return ' . $array . ';');
