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

    }

    public function load(){//load reviews from file

    }
}