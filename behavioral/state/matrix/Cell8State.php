<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell8State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        echo '7';
        $this->context->setState($this->context->getCell7State());
    }
    public function goRight(){
        echo '9';
        $this->context->setState($this->context->getCell9State());
    }
    public function goUp(){
        echo '5';
        $this->context->setState($this->context->getCell5State());
    }
    public function goDown(){
        // illegal
    }
}
