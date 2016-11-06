<?php
//ini_set('display_errors', 1);
$dir = '../lib';
$libs = scandir($dir);
foreach($libs as $lib){
    $filename = $dir."/".$lib;
    if(is_file($filename) && strrpos($filename, '.php') == strlen($filename) - 4){
        include($filename);
    }
}
//include "../lib/functions.php";
//include_once "../lib/functions1.php";//warning
//include_once "../lib/functions.php";//не сработает
//require "../lib/functions2.php";//fatal error

$array = rand_array();
var_dump($array);

echo "<hr>";

$mul = function ($a, $b){
    return $a * $b;
};

echo $mul(2, 2);

echo "<hr>";

$func = 'mul';
echo $$func(2, 3);

echo "<hr>";
$func = 'rand_array';
$arr = $func();
var_dump($arr);
?>
<form method="post">
    <label for="a">A</label>
    <input id="a" type="text" name="a">
    <br>
    <label for="b">B</label>
    <input id="b" type="text" name="b">
    <br>
    <label for="operation">Operation</label>
    <select name="operation" id="operation">
        <option value="sum">Sum</option>
        <option value="mul">Multiply</option>
    </select>
    <br>
    <input type="submit" name="calc" value="Calculate">
</form>
<?php
    if($_REQUEST['calc'] && $_REQUEST['a'] && $_REQUEST['b']){
        echo $_REQUEST['operation']($_REQUEST['a'], $_REQUEST['b']);//mul in functions.php
        //$op = $_REQUEST['operation'];
        //echo $$op($_REQUEST['a'], $_REQUEST['b']);//$mul in index.php
    }

echo "<hr>";
$x = 20;
$sum = function($a, $b) use($x){
    echo $a + $b + $x;
};
$sum(2, 3);

echo "<hr>";

$array = rand_array();
var_dump($array);
$pow = 4;

$array2 = array_map(function($item) use($pow){
    return pow($item, $pow);
}, $array);

var_dump($array2);

echo "<hr>";

$array = rand_array();
var_dump($array);
map($array, function($el) {
    return pow($el, 2);
});
var_dump($array);

echo "<hr>";
$array = rand_array();
$pow = 4;
var_dump($array);

map($array, function($el) use($pow){
    return pow($el, $pow);
});

var_dump($array);