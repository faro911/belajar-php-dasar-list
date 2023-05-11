<?php

function sayHallo(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHallo("Faro", function($name){return strtoupper($name);});
sayHallo("Faro", fn($name)=> strtoupper($name));
sayHallo("Faro", "strtoupper");
sayHallo("Faro", "strtolower");