<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PrimitiveWrap {

    private $wrapeMe;

    public function __construct($prim) {
        $this->wrapeMe = $prim;
    }

    public function showWrap() {
        return $this->wrapeMe;
    }

}

$myPrim    = 521;
$wrappedUp = new PrimitiveWrap($myPrim);
echo $wrappedUp->showWrap();
