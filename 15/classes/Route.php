<?php

class Route {
    public static function __callStatic($name, $arguments){
        if(count($arguments) == 2){
            /*echo $name,"<br>";*/
            var_dump($_SERVER['REQUEST_URI']);
            if(strtolower($name) == strtolower($_SERVER['REQUEST_METHOD'])){
                if($_SERVER['REQUEST_URI'] == $arguments[0]){
                    if($arguments[1] instanceof Closure){
                        $arguments[1]();
                    }
                }
            }
        }else{
            echo '<br>Error!!!!<br>';
        }
    }
}