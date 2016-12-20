<?php

class ZeroException extends Exception {
    public function __construct($message = 'Devide by Zero', $code = 0, Exception $previous = null){
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": {$this->message} in {$this->file}. line({$this->line})";
    }
}