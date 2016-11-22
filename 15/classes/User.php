<?php


class User {
    private $name = '';
    private $email = '';
    private $phone = '';

    public function __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function __get($name){
        if(property_exists(self::class, $name)){
            return $this->$name;
        }
    }

    public function __set($name, $value){
        if(property_exists(self::class, $name)){
            if($name == 'email'){
                if(preg_match('/^[a-z0-9\.\-_]+@[a-z0-9\-_]+.[a-z]+$/i', $value)){
                    $this->$name = $value;
                }else{
                    echo "<br>Wrong Email!<br>";
                }
            }elseif ($name == 'phone'){
                if(preg_match('/^\+380[0-9]{9}$/', $value)){
                    $this->$name = $value;
                }else{
                    echo "<br>Wrong phone number!<br>";
                }
            }else{
                $this->$name = $value;
            }
        }
    }

    public function __toString(){
        return '<tr><td>'.$this->name.'</td><td><a href="mailto:'.$this->email.'">'.$this->email.'</a></td><td><a href="tel:'.$this->phone.'">'.$this->phone.'</a></td></tr>';
    }

    public function __invoke($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
}
