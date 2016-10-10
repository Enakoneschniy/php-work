<?php
//switch

$day_num = 5;

switch($day_num){
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    case 7:
        echo "Воскресенье";
        break;
}

echo "<hr>";

$day_num = 5;
//групировка по дням
switch($day_num){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Будни";
        break;
    case 6:
    case 7:
        echo "Выходные";
        break;
    default: echo "Такого дня нет";
        break;
}

echo "<hr>";
$a = 2;
$b = 4;
switch (true) {
    case $b > $a:
        echo "OK";
        break;
    case $b == 4:
        echo "Error";
        break;
}

echo "<hr>";

$i = 1;
$n = 10;

while ($i <= $n) {
    echo $i, "<br>";
    $i++;
}

echo "<hr>";

$i = 10;
$n = 1;

while ($i >= $n) {
    echo $i, "<br>";
    $i--;
}

echo "<hr>";

$i = 1;
$n = 10;

do{
    echo $i, " ";
    $i++;
}while($i <= $n);

echo "<hr>";

 $i = 11;
 $n = 10;
 $m = 20;

do{
    echo $i, " ";
    $i++;
}while($i <= $n);

echo "<hr>";

for ($i = 1; $i < $n; $i++) { 
    echo $i, ", ";
}
echo "<hr>";

for ($i = 1, $j = 2; $i < $n; $i++, $j++) { 
    echo $i, "($j), ";
}
echo "<hr>";

for ($i = 1; $i < $n; $i += 2) { 
    echo $i, ", ";
}

echo "<hr>";

echo "Написать скрипт вычисляющий сумму чисел от 1 до n<br>";

$n = 10;
$sum = 0;

for ($i = 1; $i <= $n; $i++) { 
    $sum += $i;
}
echo "Сумма от 1 до $n = $sum";

echo "<hr>";

echo "Написать скрипт вычисляющий произведение чисел от 1 до n<br>";

$n = 10;
$mul = 1;

for ($i = 1; $i <= $n; $i++) { 
    $mul *= $i;
}
echo "Произведение от 1 до $n = $mul";

echo "<hr>";

echo "Написать скрипт вычисляющий сумму четных чисел от 1 до n<br>";

$n = 10;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    if($i%2 == 0){ 
        $sum += $i;
    }
}
echo "Сумма четных чисел от 1 до $n = $sum";

echo "<hr>";

echo "Написать скрипт вычисляющий сумму четных и не четных чисел от 1 до n<br>";

$n = 10;
$sum = 0;
$sum_not = 0;

for ($i = 1; $i <= $n; $i++) {
    if($i%2 == 0){ 
        $sum += $i;
    }else{
        $sum_not += $i;
    }
}
echo "Сумма четных чисел от 1 до $n = $sum<br>";
echo "Сумма не четных чисел от 1 до $n = $sum_not";

echo "<hr>";

echo "Написать скрипт вычисляющий сумму четных чисел от 1 до n (continue)<br>";

$n = 10;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    if($i%2 != 0){ 
        continue;
    }

    $sum += $i;

}
echo "Сумма четных чисел от 1 до $n = $sum";

echo "<hr>";

echo "Написать скрипт выводящий на экран квадраты чисел от 2 до n<br>";

$n = 5;

for($i = 2; $i <= $n; $i++){
    echo pow($i, 2), ", ";
}

echo "<hr>";

echo "<h1>Массивы</h1>";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];//$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

// echo "<pre>";
// print_r($array);
// echo "</pre>";

var_dump($array);

foreach ($array as $index => $number) {
    echo $index, " : ", $number, "<br>";
}

echo "<hr>";

for($i = 0; $i < count($array); $i++){
    echo $i, " : ", $array[$i], "<br>";
}

echo "<hr>";
echo "Найти сумму всех элементов массива<br>";

$sum_array = 0;

foreach($array as $number){
    $sum_array += $number;
}
echo "Сумма элементов массива равна $sum_array (foreach)<br>";

$sum_array = 0;

for($i = 0; $i < count($array); $i++){
    $sum_array += $array[$i];
}
echo "Сумма элементов массива равна $sum_array (for)<br>";

echo "<hr>";

$ar_num = [];//пустой массив 

$ar_num[2] = 243;
$ar_num[4] = 676;
$ar_num[444] = 345;
$ar_num[0] = 676;

var_dump($ar_num);

echo "<hr>";

$ar_num = [
    4 => 23423,
    56 => 3545,
    8 => 678
];

var_dump($ar_num);

echo "<hr>";
$ar = [
    10 => 55
];

for($i = 1; $i <= 10; $i++){
    $ar[$i] = $i;
}
var_dump($ar);

echo "<hr>";
$ar = [];

for($i = 1; $i <= 10; $i++){
    $ar[] = rand(-100, 100);
}
var_dump($ar);