<?php
function rand_array($n = 10, $min = 1, $max = 10){
    $array = [];
    for ($i=0; $i < $n; $i++) { 
        $array[] = rand($min, $max);
    }
    return $array;
}