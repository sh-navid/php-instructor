<?php

$a = [10, 2, 3];
$b = [3, 4, 5, 8];
echo print_r($a + $b);
/*
    [0] => 10
    [1] => 2
    [2] => 3
    [3] => 8
*/

$a = ["a" => "A", "b" => "B"];
$b = ["a" => "A", "c" => "C"];
echo print_r($a + $b);
/*
    [a] => A
    [b] => B
    [c] => C
*/