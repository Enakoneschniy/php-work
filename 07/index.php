<?php
$res = print "<h1>Title</h1>";
print $res;
$x = 34 + 45;
echo "<br>";
echo "x = $x";
echo "<br>";
printf('Result = %d, dddd, a = %d', 234, 45);
echo "<br>";
$name = 'Евгений';
$age = 23;
printf('Меня зовут %s, мне %d лет.', $name, $age);
echo "<br>";
echo 'Меня зовут '.$name.' мне '.$age.'лет';
echo "<br>";
$user = [
    'name' => 'Evgeniy',
    'last_name' => "blalbalb",
    'age' => 23,
];

printf('My name %s, I am %d years', $user['name'], $user['age']);

echo "<br>";
$user['info'] = sprintf('My name %s %s, I am %d years', 
                        $user['name'], 
                        $user['last_name'], 
                        $user['age']);
echo $user['info'];

echo "<br>";

vprintf('My name %s %s, I am %d years. %s', $user);

echo "<br>";

$user = [
    'name' => 'Evgeniy',
];

vprintf('My name %s %s, I am %d years. %s', $user);//not working

echo "<br>";

$str = "a,s,d,f,g,h,j,y,r,t,y,e";
$arStr = explode(',', $str);
var_dump($arStr);

echo "<br>";
$str = "a,s,d,f,g,h,j,y,r,t,y,e";
$arStr = explode(',', $str, 5);
var_dump($arStr);
echo "<br>";

$str = "a,s,d,f,g,h,j,y,r,t,y,e";
$arStr = explode(',', $str);
var_dump($arStr);

echo "<br>";

$str = "a,s,d,f,g,h,j,y,r,t,y,e";
$arStr = explode(',', $str);
var_dump($arStr);
$newStr = implode(' ', $arStr);
echo $newStr;
echo "<br>";
$n = rand(10, 20);
$arNum = [];
for($i = 0; $i < $n; $i++){
    $arNum[] = rand(-20, 20);
}
// var_dump($arNum);
echo implode('; ', $arNum);
echo "<br>";
$password = "qwerty";
$pattern = "1234567890poiutrwqqasghhkjl;cvczczbstrjdry7i";
$salt = str_shuffle($pattern);
$salt = substr($salt, 0, 10);
$safePass = md5($password);
$safePass .= $salt;
$safePass = md5($safePass);
echo $safePass;
echo "<hr>";
$str = str_repeat("10,", 10);
echo $str, "<br>";
$str = trim($str,',');
echo $str;
echo "<hr>";
$str = str_repeat(",0,1", 3);
echo $str, "<br>";
$str = trim($str,',');
echo $str;
$arZeroOne = explode(',', $str);
var_dump($arZeroOne);
echo "<hr>";
$hello = "Fuck world";
$hello = str_replace(['Fuck'],'****', $hello);
echo $hello;
echo "<br>";
$str = "a,s,d,f,g,h,j,y,r,t,y,e";
echo str_replace(',',' ', $str);
echo "<hr>";
$hello = "Hello world, blabla, sdsd";
$s = 'world';
$pos = strpos($hello, $s);
echo $pos, " ", substr($hello, $pos, strlen($s));
