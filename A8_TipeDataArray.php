<?php

$values = array(1,2,3,4);
var_dump($values);

$names = ["satu","dua","tiga"];
var_dump($names);

//opsi array

// 1. $array[index] ~> mengakses data array pada nomer index
// 2. $array[index] = value ~> mengubah data pada array berdasarkan index dgn value baru
// 3. $array[] = value ~> mnbmbah data array posisi paling belakang
// 4. unset($array[index]) ~> menghapus data array, index otomatis hilang dari array
// 5. count($array) ~> mengambil total data pada array

var_dump($names[0]);
var_dump($names[0] = "susu" );
$values[] = 100;
var_dump($values);
unset($names[0]);
var_dump($names);

echo count($names);
echo "\n \n \n";

//array sebagai map //array didalam array

$budi = array(
    "id"=>"M1",
    "name"=> "Budi Setiawan",
    "age"=> 28
);

$dewi = [
    "id"=>"M2",
    "name"=> "Dewinata",
    "age"=> 25,
    "address"=> [
        "city"=> "Bandung",
        "country"=> "Indonesia"
    ]
];
var_dump($budi);
var_dump($dewi);
echo "\n \n";

echo "Nama saya ";
echo $dewi["name"];
echo " dan saya tinggal di ";
echo $dewi["address"]["country"];


