<?php
function rand_array($n = 10, $min = 1, $max = 10){
    $array = [];
    for ($i=0; $i < $n; $i++) { 
        $array[] = rand($min, $max);
    }
    return $array;
}

function map(Array &$array, $func){//аналог array_map
    foreach($array as &$item){
        $item = $func($item);
    }
}

function mul ($a, $b){
    return $a * $b;
}

function sum($a, $b){
    return $a + $b;
}

