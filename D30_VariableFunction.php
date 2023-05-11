<?php

function foo(){
    return "FOO" . PHP_EOL;
}
function bar(){
    return "BAR" . PHP_EOL;
}

$inifoo = "foo";
$inifoo();
var_dump($inifoo);
$inibar = "bar";
$inibar();
var_dump($inibar);

//penggunaan variabel function untuk dapat memudahkan memanggil function didalam argument

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("TuRu", "strtoupper");
sayHello("TuRu", "strtolower");