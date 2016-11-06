<?php
$numbers = range(1, 20, 2);
var_dump($numbers);
shuffle($numbers);//ok
var_dump($numbers);
//shuffle([1,2,3,4,5,5,5]); //error
echo "<hr>";
$chars = range('a', 'z');
var_dump($chars);
echo "<hr>";
$chars = range('A', 'Z');
var_dump($chars);
echo "<hr>";
$array = [];
$n = 20;
for ($i=0; $i < $n; $i++) { 
    $array[] = rand(1, 10);
}
var_dump($array);
$array = array_unique($array);
var_dump($array);
echo "<hr>";
sort($array);
var_dump($array);
echo "<br>";
$array = [];
$n = 20;
for ($i=0; $i < $n; $i++) { 
    $array[] = rand(1, 10);
}
sort($array);
var_dump($array);
echo "<hr>";
$a = 10;
function hello(){
    echo "Hello World!";
}
hello();
echo "<hr>";
$a = 10;
function printa(){
    global $a;
    $b = 20;
    echo $a;
}
printa();//ничего не выведет
echo $b;//ничего не выведет
echo "<hr>";
function sum($a, $b){
    return $a + $b;
}
echo sum(1, 3);
echo "<hr>";
function rand_array($n, $min = 1, $max = 10){
    $array = [];
    for ($i=0; $i < $n; $i++) { 
        $array[] = rand($min, $max);
    }
    return $array;
}
$testArray = rand_array(10, 1, 100);
$testArray1 = rand_array(20, 1, 100);
var_dump($testArray);

function all_sum(...$arguments){//бесконечное число аргументов. $arguments - массив
    var_dump($arguments);
    $sum = 0;
    foreach ($arguments as $arg) {
        if(is_integer($arg)){
            $sum += $arg;
        }
    }
    return $sum;
}
echo all_sum(1, 2, 3, 4, 5, 6, 7, 8, 9), "<br>";
echo all_sum(1, 2, 3, 4, 5), "<br>";
echo all_sum(122, 245, 3, 47, 534), "<br>";
echo all_sum(122, 245, "dd", 47, 534), "<br>";
echo "<br>";
function test(...$args){
    if(count($args) == 1 && is_array($args[0])){
        var_dump($args[0]);
    }else{
        var_dump($args);
    }
}
test([1, 2, 3],[3, 4, 5],[6, 7, 8]);
//result [10, 13, 16]