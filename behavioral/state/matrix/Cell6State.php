<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell6State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        echo '5';
        $this->context->setState($this->context->getCell5State());
    }
    public function goRight(){
        // illegal
    }
    public function goUp(){
        echo '3';
        $this->context->setState($this->context->getCell3State());
    }
    public function goDown(){
        echo '9';
        $this->context->setState($this->context->getCell9State());
    }
}
