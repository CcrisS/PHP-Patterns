<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class CloneMe{
    public $name;
    public $picture;
    abstract function __clone();
}

class Person extends CloneMe{
    public function __construct(){
        $this->picture="cloneMan.png";
        $this->name="Original";
    }
    public function display(){
        echo "<img src='$this->picture'>";
        echo "<br/>$this->name<p/>";
    }
    function __clone(){}
}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name="Cloned";
$slacker->display();