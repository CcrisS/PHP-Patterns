<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class OnState implements IState {

    private $context;

    public function __construct(Context $contextNow) {
        $this->context = $contextNow;
    }

    public function turnLightOn() {
        echo "<img src='lights/nada.png'>";
    }

    public function turnBrighter() {
        echo "<img src='lights/brighter.png'>";
        $this->context->setState($this->context->getBrighterState());
    }

    public function turnBrightest() {
        echo "<img src='lights/nada.png'>";
    }

    public function turnLightOff() {
        echo "<img src='lights/nada.png'>";
    }

}
