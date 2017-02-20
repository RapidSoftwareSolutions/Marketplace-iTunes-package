<?php

if(PHP_SAPI != 'cli' || $argc < 1){
    exit('only console using');
}

if(
    $argc < 2 ||
    strlen($argv[1]) < 1 ||
    !is_file($argv[1])
){
    exit(
        "\n" .
        'Usage: php convertMetadataArrayToJson.php <path_to_file> <output_folder_path>' . "\n" .
        'Where:' . "\n" .
        "    <path_to_file> is full path to metadata file\n" .
        "    <output_folder_path> not required, full path to folder for output metadata file\n\n"
    );
}
$outputDir = '';
if(isset($argv[2])){
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
}

//--------------//
//-- TO JSON ---//
//--------------//
$json = include_once $argv[1];
unset($json['custom']);
$json = json_encode($json, JSON_PRETTY_PRINT);
if(json_last_error() != 0) {
    exit(
        "\n" .
        "! JSON syntax error\n" .
        "  Message: " . json_last_error_msg() .
        "\n\n"
    );
}
$json = str_replace('\/', '/', $json);
file_put_contents($outputDir . 'metadata.json', $json);
