<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell5State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        echo '6';
        $this->context->setState($this->context->getCell6State());
    }
    public function goRight(){
        echo '7';
        $this->context->setState($this->context->getCell7State());
    }
    public function goUp(){
        echo '2';
        $this->context->setState($this->context->getCell2State());
    }
    public function goDown(){
        echo '8';
        $this->context->setState($this->context->getCell8State());
    }
}
