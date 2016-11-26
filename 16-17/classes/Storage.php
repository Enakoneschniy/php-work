<?php

class Storage {
    private $list = [];
    private $storagePath = '';

    public function __construct($storagePath){
        $this->storagePath = $storagePath;
        //load from file
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/16-17/'.$this->storagePath)){
            if(filesize($_SERVER['DOCUMENT_ROOT'].'/16-17/'.$this->storagePath) > 0){
                $this->load();
            }
        }
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

    public function all($order = ['date' => 'desc']){
        uasort($this->list, function ($first, $second) use($order) {
            $propName = array_keys($order)[0];
            if($order[$propName] === 'desc') {//сортируем по убыванию
                if($first->$propName < $second->$propName){
                    return 1;
                }else{
                    return -1;
                }
                //return $first->$propName <=> $second->$propName;
            }else{//сортируем по возрастанию
                if($first->$propName > $second->$propName){
                    return 1;
                }else{
                    return -1;
                }
            }
        });//sort by props
        return $this->list;
    }
}