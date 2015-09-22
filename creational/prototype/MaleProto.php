<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ('IPrototype.php');

class MaleProto extends IPrototype {

    const gender = "MALE";

    public $mated;

    public function __construct() {
        $this->eyeColor = "red";
        $this->wingBeat = "220";
        $this->unitEyes = "760";
    }

    function __clone(){}
}
