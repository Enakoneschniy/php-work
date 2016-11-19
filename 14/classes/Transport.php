<?php

abstract class Transport {
    protected $speed = null;
    protected $name = null;
    protected $color = null;
    public $speedMetric = null;

    abstract public function info();

    public function __construct($name, $color, $speed){
        $this->name = $name;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSpeed(){
        return $this->speed." ".$this->speedMetric;
    }

    public function getColor(){
        return $this->color;
    }

    public function getName(){
        return $this->name;
    }
}