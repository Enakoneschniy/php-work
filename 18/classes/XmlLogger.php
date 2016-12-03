<?php


class XmlLogger implements ILogger{

    public function log($message) {
        echo 'XmlLogger ['.date('d.m.Y H:i:s').']'.$message.'<br>';
    }
}