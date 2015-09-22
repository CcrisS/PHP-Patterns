<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// abstract template method class
abstract class TmAb {

    protected $pix;
    protected $cap;

    public function templateMethod() {
        $this->addPix();
        $this->addCaption();
    }

    protected abstract function addPix();

    protected abstract function addCaption();
}
