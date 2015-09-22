<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell4State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        // illegal
    }
    public function goRight(){
        echo '5';
        $this->context->setState($this->context->getCell5State());
    }
    public function goUp(){
        echo '1';
        $this->context->setState($this->context->getCell1State());
    }
    public function goDown(){
        echo '7';
        $this->context->setState($this->context->getCell7State());
    }
}
