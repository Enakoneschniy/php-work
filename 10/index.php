<?php
//рекурсия
    $n = 3;
$res = 1;
for($i = 1; $i <= $n; $i++){
    $res *= $i;
}
var_dump($res);

function fact($n){
    if($n == 1){
        return 1;
    }else{
        return $n * fact($n - 1);
    }
}

$rec = fact(5);
var_dump($rec);

echo "<hr>";
function fibonacci($n){
    if ($n < 3) {
        return 1;
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}
for ($n = 1; $n <= 16; $n++) {
    echo(fibonacci($n) . ", ");
}

//files
echo "<hr>";
$str = "Hello worlddd";
$array = [12,34,45,67];
//file_put_contents('text.txt', $array);
//$rozetka = file_get_contents('http://rozetka.ua');
//file_put_contents('rozetka', $rozetka);

$handle = fopen('text.txt', 'r+');

$file_content = '';
while(!feof($handle)){
    $file_content .= fgets($handle);
}
fclose($handle);
$file_content = str_replace(' ', '&nbsp;', $file_content);
echo nl2br($file_content);

/*$handle = fopen('test.txt', 'w+');
    fputs($handle, "Hello....\nHi.");
fclose($handle);*/

$handle = fopen('test.txt', 'a+');
    fputs($handle, "Hello....\nHi.");
fclose($handle);
echo "<br>";
$handle = fopen('test.txt', 'a+');
$file = nl2br(fread($handle, filesize('test.txt')));
fclose($handle);
echo $file;

$array = [23,5,77,34,7,3,5,8546];
$json = json_encode($array);
file_put_contents('text.txt', $json);
$res = file_get_contents('text.txt');
var_dump($res);
var_dump(json_decode($res));
