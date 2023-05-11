<?php

//syntax if statement
// if(expression)
//  statement;
// if(expression){
//  statement1;
//  statement2;
// }

$nilai = 90;
$absen = 70;
$sikap = 82;

//syntx pertama
if($nilai >= 75 and $absen >= 75){
    echo "Anda Lulus dengan kategori SNI" . PHP_EOL;
} 
elseif ($nilai + $absen > 150 and $sikap > 80) {
    echo "Anda Lulus dengan nilai SWASTA" . PHP_EOL;
} 
else {
    echo "Anda Tidak Lulus " . PHP_EOL;
}

//syntax kedua
if($nilai >= 75 and $absen >= 75) :
    echo "Anda Lulus dengan kategori SNI" . PHP_EOL;
elseif ($nilai + $absen > 150 and $sikap > 80) :
    echo "Anda Lulus dengan nilai SWASTA" . PHP_EOL;
else :
    echo "Anda Tidak Lulus " . PHP_EOL;
endif;