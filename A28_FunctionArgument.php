<?php

// function sayHallo($name){
//     echo "hallo nama saya $name" . PHP_EOL;
// }
// sayHallo("udin");
// sayHallo("budi");

//Default argumentvalue
function sayHallo($name = "Unknown"){
    echo "hallo nama saya $name" . PHP_EOL;
}
sayHallo();
sayHallo("Lina");
