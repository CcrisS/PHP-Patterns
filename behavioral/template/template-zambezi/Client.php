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

class Client {

    private $buyTotal;
    private $gpsNow;
    private $mapNow;
    private $boatNow;
    private $special;
    private $zamCalc;

    function __construct() {
        $this->setHTML();
        $this->setCost();
        $this->zamCalc = new ZambeziCalc();
        $this->zamCalc->templateMethod($this->buyTotal, $this->special);
    }

    private function setHTML() {
        if (isset($_POST['gps']))
            $this->gpsNow  = $_POST['gps'];
        if (isset($_POST['map']))
            $this->mapNow  = $_POST['map'];
        if (isset($_POST['boat']))
            $this->boatNow = $_POST['boat'];
    }

    private function setCost() {
        $this->buyTotal = $this->gpsNow;
        if (isset($this->mapNow)) {
            foreach ($this->mapNow as $value) {
                $this->buyTotal+=$value;
            }
        }
        $this->special = ($this->buyTotal >= 200); // return true or false
        $this->buyTotal+=$this->boatNow;
    }

}

$worker = new Client();
