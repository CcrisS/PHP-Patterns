<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class_name) {
    include $class_name . '.php';
}

class Client{
    private $context;
    
    public function __construct(){
        $this->context=new Context();
        $this->context->turnOnLight();
        $this->context->turnBrighterLight();
        $this->context->turnBrightestLight();
        $this->context->turnOffLight();
        $this->context->turnBrightestLight();
    }
}

$worker=new CLient();