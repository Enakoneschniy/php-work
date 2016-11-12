<?php
/*
    Найти максимальное значение в массиве. (функция)
*/
$inputArr = [1, 2, 3, 4, 5, 6, 7, 8];
function max_array($array){
    $max = $array[0];
    for($i = 1; $i < count($array); $i++){
        if($max < $array[$i]){
            $max = $array[$i];
        }
    }
    return $max;
}
//$max = max_array($inputArr);
var_dump(max_array($inputArr));
/*
    Найти минимальное значение в массиве. (функция)
*/
$inputArr = [1, 2, 3, 4, 5, 6, 7, 8];
function min_array($array){
    $min = $array[0];
    for($i = 1; $i < count($array); $i++){
        if($min > $array[$i]){
            $min = $array[$i];
        }
    }
    return $min;
}
var_dump(min_array($inputArr));

/* Напечатать на экране следующие строки. (функция - циклы)
    1
    2+
    3*
    4+
    5
    6+*
    7
    8+
    9*
    10+
    11
    12+*
    13
    14+
    15*
*/
function print_num($n){
    for($i = 1; $i <= $n; $i++){
        echo $i;
        if($i%2 == 0){
            echo '+';
        }
        if($i%3 == 0){
            echo '*';
        }
        echo "<br>";
    }
}
print_num(20);

/*
    $inputArray = [1, 2, 3, 4, 5, 6, 7, 8];
    $outputArray = [7, 8, 5, 6, 3, 4, 1, 2];
*/
    $inputArray = [1, 2, 3, 4, 5, 6, 7, 8];
    //$outputArray = [7, 8, 5, 6, 3, 4, 1, 2];
    function rev($array){
        $arResult = [];
        for($i = count($array) - 1; $i > 0; $i -= 2){
            $arResult[] = $array[$i - 1];
            $arResult[] = $array[$i];
        }
        return $arResult;
    }

    $outputArray = rev($inputArray);
    var_dump($outputArray);
/*
Перевернуть строку $str = “Turn me baby”;
*/


echo $str[0];
/**
 * [[Description]]
 * @param  [string] $string [[Description]]
 * @return [string] [[Description]]
 */
function rev_str($string){
    $str = '';
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $str .= $string[$i];
    }
    return $str;
}

$str = 'Turn me baby';
echo rev_str($str);


/*
    Является ли строка палиндромом
    пример строки: $str = 'Sum summus mus';
*/

function palindrome($string){
    #code
    //return true || false;
}


