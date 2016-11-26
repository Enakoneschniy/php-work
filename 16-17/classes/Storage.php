<?php

class Storage {
    private $list = [];
    private $storagePath = '';

    public function __construct($storagePath){
        $this->storagePath = $storagePath;
        //load from file
    }

    public function __destruct(){
        $this->save();
    }

    public function add(Review $review){// add new review
        $this->list[] = $review;
    }

    public function save(){//save review to file
        $handle = fopen($_SERVER['DOCUMENT_ROOT'].'/16-17/'.$this->storagePath, 'w+');
        fwrite($handle, serialize($this->list));
        fclose($handle);
    }

    public function load(){//load reviews from file
        $this->list = unserialize(file_get_contents($this->storagePath));
    }
}