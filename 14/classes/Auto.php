<?php
trait HatchBack{
    protected $doorCount = 5;
    public function getDoorCount() {
        return $this->doorCount;
    }
    public function setDoorCount($doorCount) {
        $this->doorCount = $doorCount;
    }
}

class Auto extends Transport {
    use HatchBack;

    protected $typeTrack = null;
    public $speedMetric = 'km/h';

    public function __construct($name, $color, $speed, $type)
    {
        parent::__construct($name, $color, $speed);
        $this->typeTrack = $type;
    }

    /*public function getSpeed(){
        return parent::getSpeed().' km/h';
    }*/

    public function getTypeTrack(){
        return $this->typeTrack;
    }

    public function setTypeTrack($typeTrack){
        $this->typeTrack = $typeTrack;
    }

    public function info(){
        return "This is Auto: " . $this->name
        . ", Speed: " . $this->getSpeed()
        . ", Type: " . $this->typeTrack;
    }

    public function getDoorCount(){//переопределение метода из trait
        return 'door count: '.$this->doorCount;
    }
}