<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell2State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        echo '1';
        $this->context->setState($this->context->getCell1State());
    }
    public function goRight(){
        echo '3';
        $this->context->setState($this->context->getCell3State());
    }
    public function goUp(){
        // illegal
    }
    public function goDown(){
        echo '5';
        $this->context->setState($this->context->getCell5State());
    }
}
