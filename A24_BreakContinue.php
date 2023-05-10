<?php

$hitung = 1;

while(true){
    echo "hello break ke-$hitung" . PHP_EOL;
    $hitung++;
    if($hitung > 10){
        break;
    }
}

for($counter = 0; $counter <= 100; $counter++){
    if($counter % 2 == 0){
        continue;
    }
    echo "hello continue ke-$counter" . PHP_EOL;
}
