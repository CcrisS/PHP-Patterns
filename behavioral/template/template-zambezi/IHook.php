<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class IHook {

    protected $purchased;
    protected $hookSpecial;
    protected $shippingHook;
    protected $fullCost;

    public function templateMethod($total, $special) {
        $this->purchased   = $total;
        $this->hookSpecial = $special;
        $this->addTax();
        $this->addShippingHook();
        $this->displayCost();
    }

    protected abstract function addTax();

    protected abstract function addShippingHook();

    protected abstract function displayCost();
}
