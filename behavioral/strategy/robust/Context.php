<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Context {

    private $strategy;
    private $dataPack;

    public function __construct(IStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function algorithm(Array $dataPack) {
        $this->dataPack = $dataPack;
        $this->strategy->algorithm($this->dataPack);
    }

}
