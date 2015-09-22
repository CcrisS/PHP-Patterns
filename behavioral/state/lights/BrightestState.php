<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BrightestState implements IState {

    private $context;

    public function __construct(Context $contextNow) {
        $this->context = $contextNow;
    }

    public function turnLightOn() {
        echo "<img src='lights/nada.png'>";
    }

    public function turnBrighter() {
        echo "<img src='lights/nada.png'>";
    }

    public function turnBrightest() {
        echo "<img src='lights/nada.png'>";
    }

    public function turnLightOff() {
        echo "<img src='lights/off.png'>";
        $this->context->setState($this->context->getOffState());
    }

}
