<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Creator {

    protected abstract function factoryMethod();

    public function doFactory() {
        $mfg=$this->factoryMethod();
        return $mfg;
    }

}
