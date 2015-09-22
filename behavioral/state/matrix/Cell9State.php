<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell9State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        echo '8';
        $this->context->setState($this->context->getCell8State());
    }
    public function goRight(){
        // illegal
    }
    public function goUp(){
        echo '6';
        $this->context->setState($this->context->getCell6State());
    }
    public function goDown(){
        // illegal
    }
}
