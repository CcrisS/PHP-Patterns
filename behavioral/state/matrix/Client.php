<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



function __autoload($class_name) {
    include $class_name . '.php';
}

class Client{
    private $context;
    
    public function __construct(){
        $this->context=new Context();
        $this->context->doUp();
        $this->context->doRight();
        $this->context->doDown();
        echo "<br>";
        $this->context->doDown();
        $this->context->doLeft();
        $this->context->doUp();
    }
}

$worker=new Client();