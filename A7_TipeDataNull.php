<?php

$name = "faro";
$name = NULL;

$age = null;

echo $name;
echo "\n";
echo $age;

//mengecek apakah data null? 
echo "is name null? ";
echo var_dump(is_null($name));
echo "\n";

//menghapus variabel
$contoh = "ini contoh dihapus";
unset($contoh);

// echo $contoh; //ini akan terjadi error

//mengecek apaakah data ada atau tidak mending pakai isset

$contoh = "data ini ada";
echo "data cek contoh : ";
var_dump(isset($contoh));