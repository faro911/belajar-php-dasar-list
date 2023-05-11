<?php

$name = "faro";

$otherName = &$name;
$otherName = "Budi";

echo $name . PHP_EOL;

//pass by reference
function increment(int &$val){ //tambah & membuat pass reference
    $val++;
}

$conter = 1;
increment($conter);
echo $conter;

//returning reference

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

echo $a . PHP_EOL;