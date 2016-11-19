<?php

class Ship extends Transport {
    public $speedMetric = 'uz';
    protected $waterPool = null;//водоизмещение

    public function __construct($name, $color, $speed, $waterPool){
        parent::__construct($name, $color, $speed);
        $this->waterPool = $waterPool;
    }

    public function getWaterPool(){
        return $this->waterPool;
    }

    public function setWaterPool($waterPool){
        $this->waterPool = $waterPool;
    }

    public function info() {
        return 'This is Ship: '.$this->name.", water pool: ".$this->waterPool." t.";
    }
}