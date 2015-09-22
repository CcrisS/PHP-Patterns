<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


function __autoload($class_name) {
    include $class_name . '.php';
}

class ClientH
{

    private $hotDate;
    private $progLange;
    private $hardware;
    private $food;
    
    public function __construct()
    {
        // Get params
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $this->progLange = $_POST["progLang"];
        $this->hardware = $_POST["hardware"];
        $this->food = $_POST["food"];
        
        $this->hotDate = new $gender();
        $this->hotDate->setAge($age);
        echo $this->hotDate->getAge();
        $this->hotDate=$this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }
    
    private function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature($this->progLange);

        $component=new Hardware($component);
        $component->setFeature($this->hardware);

        $component=new Food($component);
        $component->setFeature($this->food);

        return $component;
    }
    
}

$worker=new ClientH();