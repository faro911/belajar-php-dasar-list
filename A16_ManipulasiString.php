<?php
// dot Operator
 
$name = "Faro911";
echo "Nama : " . $name . PHP_EOL;
echo "Stat : " . 999 . "\n";

// konversi ke number atau sebbaliknya
$valueString = (string)100;
var_dump($valueString);
$valueInteger = (int)"100";
var_dump($valueInteger);
$valueFloat = (float)"100.11";
var_dump($valueFloat);

//mengakses krakter
$pt = "saya";
echo $pt[0] . PHP_EOL;
echo $pt[1] . PHP_EOL;
echo $pt[2] . PHP_EOL;
echo $pt[3] . PHP_EOL;

//variable parsing //curling
$namaku = "faro";
echo "Hallo nama saya $namaku , terimakasih" . PHP_EOL;
echo "Hallo nama saya {$namaku}'s , terimakasih" . PHP_EOL;