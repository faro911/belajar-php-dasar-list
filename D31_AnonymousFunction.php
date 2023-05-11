<?php

$sayHello = function(string $name) {
    echo "Hallo $name" . PHP_EOL;
};

$sayHello("faro");

//anonymus funtion ssebagai argumen

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "bye bye $finalName" . PHP_EOL;
}

sayGoodBye("ruJak", function(string $name): string {
    return strtoupper($name);
});

// penulisanya bisa sperti ini

$filterFunction = function(string $name): string {
    return strtoupper($name);
};

sayGoodBye("jamBu", $filterFunction);

//mengakses variabeel diular scope
$nama1 ="ulo";
$nama2 ="boyo";

$greeting = function () use($nama1, $nama2) {
    echo "hallo $nama1 dan $nama2 " . PHP_EOL;
};

$greeting();