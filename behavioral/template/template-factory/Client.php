<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {

    function __construct() {
        $mo = new TmFac();
        $mo->templateMethod();
    }

}

$worker = new Client();
