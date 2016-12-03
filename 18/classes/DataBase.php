<?php


class DataBase {
    private static $instance = null;
    public $prop = 'sdf';
    private function __construct(){

    }

    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function tets(){
        echo 'It works';
    }
}