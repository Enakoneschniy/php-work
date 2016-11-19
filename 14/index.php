<?php
include_once 'init.php';

$bmw = new Auto('BMW', 'black', 320, 'sedan');
echo $bmw->getSpeed(), '<br>';
//$bmw->speedMetric = "mile/h";
echo $bmw->getSpeed(), '<br>';
var_dump($bmw);
echo '<hr>';
$ship = new Ship('Titanic', 'red', 34, 5);//5 тонн
echo $ship->getSpeed(), '<br>';
var_dump($ship);

echo $bmw->info(), '<br>';
echo $ship->info(), '<br>';
echo $bmw->getDoorCount(), '<br>';
