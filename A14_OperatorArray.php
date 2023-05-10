<?php

// operator array
// $a + $b ~> UNION => Menggabungkan array a dan b
// $a == $b ~> equality => true jika a dan b memiliki key yang sama
// $a === $b ~> identitiy => true jika a dan b memiliki key yang sama dan posisi sama
// $a != $b ~> inequality => true jika a dan b tdk sama
// $a <> $b ~> inequality => true jika a dan b tdk sama
// $a !== $b ~> inequality => true jika a dan b tdk identik
//

$first = ["first_name"=> "sopo"];
$last = ["last_name"=> "hayo"];

$full = $first + $last;
var_dump($full);

//perbadningan

$a = ["name"=>"budi", "age"=> 17];
$b = ["age"=> 17, "name"=>"budi"];

var_dump($a == $b);
var_dump($a === $b);