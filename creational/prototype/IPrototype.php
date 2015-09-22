<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//abstract class IPrototype {
//
//    public $eyeColor;
//    public $wingBeat;
//    public $unitEyes;
//    
//    abstract function __clone();
//
//}


interface IPrototype {

    const PROTO = "IPrototype";

    function __clone();
}

?>