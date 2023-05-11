<?php
//variabel scope 
// global, local , static



$name = "satu"; // global scope

function sayName()
{
    // echo $name; // akan terjadi error karena $name berada diglobal scope .
    global $name; //global keyword dan yang atas echo name akan bisa dieksekusi
    $word = "halo"; // local scope
}

// sayName();
// echo $word . PHP_EOL; // akan terjadi error karena $word 

//kode $GLOBAL Variabeel
function sapa()
{
    echo "hai baanh {$GLOBALS['name']}" . PHP_EOL;
}

sapa();

//static SCOPE
function increment(){
     static $counter = 1; //static untuk nilai counter agar bisa ditmbhkan
    echo "counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();

