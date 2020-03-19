#!/bin/env php
<?php

require_once __DIR__ .'/../vendor/autoload.php' ;

if ($argc < 2){
    die("Usage: " . basename($argv[0]) . " xmlfile [ u ]" .PHP_EOL .
            "Where: ". PHP_EOL .
            " - xmlfile: is the xml filename to process". PHP_EOL .
            " - u      : if appears then only show unique results". PHP_EOL);
}
$unique = false ;
if(isset($argv[2]) && $argv[2] == 'u'){
    $unique=true ;
}

$xmlfile = $argv[1] ;
$xpath = new Percasoft\XmlToXpath();

$out = $xpath->convert($xmlfile, $unique) ;

foreach($out as $item){
    echo "$item" . PHP_EOL ;
}
