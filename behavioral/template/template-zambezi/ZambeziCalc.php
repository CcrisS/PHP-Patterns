<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ZambeziCalc extends IHook {

    protected function addTax() {
        $this->fullCost = $this->purchased + ($this->purchased * .10);
    }

    protected function addShippingHook() {
        if (!$this->hookSpecial) {
            $this->fullCost +=15.00; // adding shipping cost
        }
    }

    protected function displayCost() {
        echo "Your full cost is $this->fullCost";
    }

}
