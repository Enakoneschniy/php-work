<?php
class Car {
    public $color = "red";
    public $speed = 300;
    public $name = "BMW X5";
    private $vin = '12312312345645';

    public function drive(){
        echo "Driving!!<br>";
    }

    public function getVin(){
        return $this->vin;
    }

    public function setVin($vin){
        $this->vin = $vin;
    }
}

$car = new Car();
$car1 = new Car();
//var_dump($car);
echo $car->name, "<br>";
echo $car->color, "<br>";
$car->name = 'Audi A8';
echo $car->name, "<br>";

echo $car1->name, "<br>";
echo $car1->color, "<br>";
//echo $car1->vin, "<br>";//error
$car->drive();
$car1->drive();
echo $car->getVin(), " car <br>";
echo $car1->getVin(), " car1 <br>";
$car->setVin("sdfsd534234");
echo $car->getVin(), " car <br>";
echo $car1->getVin(), " car1 <br>";

//--------------------Static--------------------
echo "----------------------Static----------------<br>";

class Human {
    public static $eys = 2;
    private static $age = 21;
    const DNC = 34;
    public static function getAge(){
        return self::$age;
    }
}
echo Human::$eys, "<br>";
echo Human::DNC, "<br>";
echo Human::getAge(), "<br>";
//Math::round(234.5);//js analog
$h1 = new Human();
$h2 = new Human();
echo $h1::$eys, "<br>";
$h1::$eys = 3;
echo $h2::$eys, "<br>";
echo $h1::$eys, "<br>";

echo "<br>----------------------Static----------------<br>";
//--------------------Static--------------------

echo "<br>----------------------Construct----------------<br>";
class MyCar {
    private $color;
    private $speed;
    private $name;

    public function  __construct($name, $color, $speed){
        $this->name = $name;
        $this->color = $color;
        $this->speed = $speed;
        $this->wheels = rand(2, 20);
    }

    public function getName(){
        return $this->name;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function getColor(){
        return $this->color;
    }

    public function getWheels(){
        return $this->wheels;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setColor($color){
        $this->color = $color;
        return $this;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
        return $this;
    }

    public function setWheels($wheels){
        $this->wheels = $wheels;
        return $this;
    }
    public function info(){
        return $this->name.", ".$this->color.", ".$this->speed;
    }
}

$c = 'green';
$bmw = new MyCar("BMW", $c, 250);
var_dump($bmw);
$audi = new MyCar("Audi", 'blue', 341);
var_dump($audi);
$audi->engine = 2;
var_dump($audi);
echo $audi
    ->setColor('black')
    ->setSpeed(345)
    ->setWheels(4)
    ->info();
var_dump($audi);
echo (new MyCar("Audi AAAAA", 'blue', 341))->info();

echo "<br>----------------------Construct----------------<br>";