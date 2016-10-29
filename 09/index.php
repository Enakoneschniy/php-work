<?php
ini_set('display_errors', 1);
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