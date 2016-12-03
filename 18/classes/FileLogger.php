<?php


class FileLogger implements ILogger{

    public function log($message){
        echo 'FileLogger ['.date('d.m.Y H:i:s').']'.$message.'<br>';
    }
}