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
    function __construct() {
        $caption="Modigliani painted enlongated faces.";
        $mo=new ConcreteClass();
        $mo->templateMethod("modig.png", $caption);
    }
}

$worker=new Client();