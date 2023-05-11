<?php

// function sayHallo($name){
//     echo "hallo nama saya $name" . PHP_EOL;
// }
// sayHallo("udin");
// sayHallo("budi");

//Default argumentvalue
function sayHallo($name = "Unknown"){
    echo "hallo nama saya $name" . PHP_EOL;
}
sayHallo();
sayHallo("Lina");


//default type declaration
function sum(int $first, int $second){
    $result = $first + $second;
    echo "hasil dari $first + $second adalah $result" . PHP_EOL;
}
sum(100,100);

//variabel lenght argument list

function sumAll(...$values){
    foreach($values as $x){
        $jumlah += $x;
    }
    echo "total " . implode(" + ", $values) . " = $jumlah" . PHP_EOL;
}
sumAll(1,2,3,4);
sumAll(...[1,2,3,4]); // varabel argumen list akan di konversi ke integer