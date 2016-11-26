<?php

class Review {
    private $name = "";
    private $text = "";

    public function __construct($name, $text){
        $this->name = $name;
        $this->text = $text;
    }

    public function __get($propName){
        if(property_exists(__CLASS__, $propName)){
            return $this->$propName;
        }
    }

    public function __set($propName, $propValue){
        if(property_exists(__CLASS__, $propName)){
            $this->$propName = $propValue;
        }
    }
}