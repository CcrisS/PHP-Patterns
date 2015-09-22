<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


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