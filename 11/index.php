<?php
$rozetka_iphones = file_get_contents('http://rozetka.com.ua/mobile-phones/c80003/filter/preset=smartfon;producer=apple/');
$rozetka_samsung = file_get_contents('http://rozetka.com.ua/mobile-phones/c80003/filter/preset=smartfon;producer=samsung/');
//echo $rozetka_iphones;
//echo $rozetka_samsung;
$string = "e.nakoneschniy@bx_master.es";
//$pattern = '/^[a-z0-9\.]+@[a-z0-9\-_]+\.[a-z]{2,5}$/i';
$pattern = '/^[a-z0-9\.]+@[a-z0-9\-_]+\.(ru|com|es)$/i';
$res = preg_match($pattern, $string);
var_dump($res);

$patternImage = '/http:\/\/i1\.rozetka\.ua\/goods\/[0-9]+\/[a-z0-9_\.]+/i';
$matches = [];
preg_match_all($patternImage, $rozetka_iphones, $matches);
var_dump($matches);
foreach($matches[0] as $img){
    $file = file_get_contents($img);
    $name = "img".rand(1, 1000).'.jpg';
    $handle = fopen($name, 'w+');
    fwrite($handle, $file);
    fclose($handle);
}

