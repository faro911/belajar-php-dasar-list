<?php

//switch syntax

$nilai_smester1 = 20;
$nilai_smester2 = 20;
$nilai_smester3 = 20;
$nilai_smester4 = 28;
$result = $nilai_smester1 + $nilai_smester2 + $nilai_smester3 + $nilai_smester4;
$kategoriA = 380;
$kategoriB = 290;
$kategoriC = 200;
$kategoriD = 100;
$hasil = null;
if($result >= $kategoriA){
    $hasil = "A";
} elseif($result >= $kategoriB){
    $hasil = "B";
} elseif($result >= $kategoriC){
    $hasil = "C";
} elseif($result >= $kategoriD){
    $hasil = "D";
} else {
    $hasil = "E";
}
// switch($hasil){
//     case "A":
//         echo "Anda Lulus dengan nilai Sangat Baik" . PHP_EOL;
//         echo "total nilai anda $result" . "~ kategori : $hasil";
//         break;
//     case "B":
//         echo "Anda Lulus dengan nilai Baik" . PHP_EOL;
//         echo "total nilai anda $result" . "~ kategori : $hasil";
//         break;
//     case "C":
//         echo "Anda Lulus dengan nilai Cukup Baik" . PHP_EOL;     
//         echo "total nilai anda $result" . "~ kategori : $hasil"; 
//         break; 
//     case "D":
//         echo "Anda Tidak Lulus" . PHP_EOL;
//         echo "total nilai anda $result" . "~ kategori : $hasil";
//         break;
//     default:
//         echo "Mungkin Anda Lelah" . PHP_EOL;
//         echo "total nilai anda $result" . "~ kategori : $hasil";
//     }

    //syntax ke 2

    switch($hasil):
        case "A":
            echo "Anda Lulus dengan nilai Sangat Baik" . PHP_EOL;
            echo "total nilai anda $result" . "~ kategori : $hasil";
            break;
        case "B":
            echo "Anda Lulus dengan nilai Baik" . PHP_EOL;
            echo "total nilai anda $result" . "~ kategori : $hasil";
            break;
        case "C":
            echo "Anda Lulus dengan nilai Cukup Baik" . PHP_EOL;     
            echo "total nilai anda $result" . "~ kategori : $hasil"; 
            break; 
        case "D":
            echo "Anda Tidak Lulus" . PHP_EOL;
            echo "total nilai anda $result" . "~ kategori : $hasil";
            break;
        default:
            echo "Mungkin Anda Lelah" . PHP_EOL;
            echo "total nilai anda $result" . "~ kategori : $hasil";
        endswitch;