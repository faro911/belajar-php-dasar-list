<?php

$names= ["ulo", "boyo", "emprit"];

//perulangan biasa
// for($i = 0; $i< count($names); $i++){
//     echo "list ke - " . $i+1 . " adalah " .$names[$i] . PHP_EOL;
// }

foreach ($names as $index => $name){
    echo "hallo ini datake " . $index+1 . " adalah $name" . PHP_EOL;
}
 
$person = [
    "first_name" => "faro",
    "middle_name" => "as",
    "last_name" => "Kanedy",
];

foreach ($person as $key=> $value){
    echo "$key : $value" . PHP_EOL;
}