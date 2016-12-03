<?php

class Animals {
    protected $animals = [];
    public function add(IAnimal $animal){
        $this->animals[] = $animal;

    }

    public function say(){
        foreach ($this->animals as $animal){
            $animal->say();
        }
    }
}