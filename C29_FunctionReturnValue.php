<?php

// function sum(int $nilai1, int $nilai2){
//     return $nilai1 + $nilai2;
// }

// $result = sum(10,11);
// var_dump($result);

// //Return values 2

// function getFinaleValue(int $value){
//     if($value >=80){
//         return "A" . PHP_EOL;
//     } elseif($value >=70){
//         return "B" . PHP_EOL;
//     } elseif($value >=55){
//         return "C" . PHP_EOL;
//     } else {
//         return "D" . PHP_EOL;
//     }
// }

// $nilai = getFinaleValue(50);
// echo "Anda mendapatkan predikat nilai $nilai" . PHP_EOL;

//menambahan return yang menghasilkan tipe data, contoh memberikan functio : typedaata(int / string)

function sum(int $nilai1, int $nilai2) : int
{
    return $nilai1 + $nilai2;
}

$result = sum(10,11);
var_dump($result);

//Return values 2

function getFinaleValue(int $value) : string
{
    if($value >=80){
        return "A" . PHP_EOL;
    } elseif($value >=70){
        return "B" . PHP_EOL;
    } elseif($value >=55){
        return "C" . PHP_EOL;
    } else {
        return "D" . PHP_EOL;
    }
}

$nilai = getFinaleValue(50);
echo "Anda mendapatkan predikat nilai $nilai" . PHP_EOL;