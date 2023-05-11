<?php

function facttorialLoop(int $value) :int {
    $total = 1;

    for($i = 1 ; $i <=$value ; $i++){
        $total *= $i;
    }

    return $total;
}

var_dump(facttorialLoop(6));

//factorial recursive

function factorialRecusive(int $value) : int
{
    if($value == 1){
        return 1;
    } else {
        return $value * factorialRecusive($value - 1);
    }
}
var_dump(factorialRecusive(6));

//kode error stackoverflow

function loop(int $value){
    if ($value == 0){
        echo "Selesai" .PHP_EOL;
    } else {
        echo "Loop - $value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(10);

//EXTRA COMENTAR

/*
ini komentar bro
ga akan di eksekusi
*/

//ini komentar 1 baris je