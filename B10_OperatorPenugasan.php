<?php

// operator penugasan
// |-----------------------------------------|
// |  Penugasan         | Keterangan         |
// |____________________|____________________|
// | $a +=$b            | $a = $a + b        |
// | $a -=$b            | $a = $a - b        |
// | $a *=$b            | $a = $a * b        |
// | $a /=$b            | $a = $a / b        |
// | $a %=$b            | $a = $a % b        |
// -------------------------------------------

$total = 0;

$fruit = 10000;
$Meat = 56000;
$egg = 23000;

$total +=$fruit;
$total +=$Meat;
$total +=$egg;

var_dump($total);
