<?php
$a = 23;//integer
$b = 3.14;//float
$c = "hello, i am string";//string
$d = true;//boolean (true/false)
$f = array();//array []
$g = null;//null

echo gettype($a), "<br>";
echo gettype($b), "<br>";
echo gettype($c), "<br>";
echo gettype($d), "<br>";
echo gettype($f), "<br>";
echo gettype($g), "<br>";

echo "<hr>";
//settype($a, 'string');//$a = '23';
echo gettype($a), "<br>";
echo gettype((string)$a), "<br>";
echo gettype($a), "<br>";
echo "<hr>";
//+, -, /, *, %

$a = 4;
$b = 6;

$x = $a + $b;

echo $a++, "<br>";
echo $a, "<br>";

echo ++$b, "<br>";
echo $b, "<br>";

echo "<hr>";
define('PI', 3.14);

echo PI, "<br>";

const MY_PI = 3.15;

echo MY_PI, "<br>";

$a = '1';
$b = 2;
echo $a + $b, "<br>";

$b += 18;

echo $b, "<br>";

$c = &$b;

echo $c, "<br>";

$b = 34;

echo $c, "<br>";

unset($c, $b);

$b = 400;

echo $b, "<br>";

echo "<hr>";
$a = 2; $b = 5;
if($a > $b){
    echo '$a больше $b';
}else{
    echo '$a не больше $b';
}
echo "<hr>";
$a = '5'; $b = 5;
if($a > $b){
    echo '$a больше $b';
}elseif($a < $b){
    echo '$a не больше $b';
}else{
    echo '$a равно $b';
}

echo "<hr>";
$a = '5'; $b = 5;
if($a == $b){
    echo "OK";
}else{
    echo "Error";
}

echo "<hr>";
$a = '5'; $b = 5;
if($a === $b){
    echo "OK";
}else{
    echo "Error";
}

echo "<hr>";
$a = '5'; $b = 5;
if($a != $b){
    echo "OK";
}else{
    echo "Error";
}

echo "<hr>";
$a = '5'; $b = 5;
if($a !== $b){
    echo "OK";
}else{
    echo "Error";
}

echo "<hr>";
$a = 5;
$b = !!$a;
echo gettype($b), "<br>";
if(!!$a){
    echo "OK";
}else{
    echo 'Error';
}
echo "<hr>";

$var = 45;
$var1 = 43;

$wtf = 'var';

echo $$wtf, "<br>";
//------------------------
$req = 'var1';
echo $$req, "<br>";//аналогично нижнему коду

if($req == 'var'){
    echo $var;
}elseif($req == 'var1'){
    echo $var1;
}
//-------------------------

echo "<hr>";

$a = isset($z) ? $z: 0;//тернарный оператор

if(isset($z)){
    $a = $z;
}else{
    $a = 0;
}
?>
<?if($a == 0):?>
    <span style="color:red;"><?=$a?></span>
    <div>
        <?if(true):?>
            <span>Lorem ipsum dolor sit.</span>
        <?else:?>
            sdfsdf
        <?endif?>
    </div>
<?endif?>