<?php
session_start();
include_once 'init.php';
$_SESSION['data'] = [12, 35, 546, 678];
var_dump($_SESSION);
var_dump($_COOKIE);
$a = 2;
$b = 1;

try{
    $res = 0;
    if($b == 0) throw new ZeroException();
    $res = $a / $b;
    //throw new Exception('some exception');
    $res = $res + 45 - $a;
    
}catch(ZeroException $e){
    
    echo $e;

}catch(Exception $e){
    
    echo $e->getMessage();
}