<?php

echo 'Nama : ';
echo 'Faro 911';

//untuk menggunakan enter harus pakai petik 2 " dan implementasinya
// \n untuk enter, \t untuk tap,  \" untuk doble quote dll
echo "\n";
echo "Nama : ";
echo "Fathur\t Faro\t 911\n uy";

// Heredoc fitur membuat sting panjang sehingga tidak perlu manual melakukan enter tab dan lain lain secara manual

echo <<<FREETOWRITE

ini adalah contoh string yang sangat panjanng,
dan juga gak perlu ketik enter
secara      manual, bisa "quote" juga, hehe 
FREETOWRITE;

// Nowdoc mirip heredoc bedanya nowdoc tidak memiliki kemampuan parsing seperti di heredoc atau doble quote, masalah parsing seperti manipulasi string
echo <<<'FREETOWRITE'

ini adalah contoh string yang sangat panjanng,
dan juga gak perlu ketik enter
secara      manual, bisa "quote" juga, hehe 
FREETOWRITE;