<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell7State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        // illegal
    }
    public function goRight(){
        echo '8';
        $this->context->setState($this->context->getCell8State());
    }
    public function goUp(){
        echo '4';
        $this->context->setState($this->context->getCell4State());
    }
    public function goDown(){
        // illegal
    }
}
