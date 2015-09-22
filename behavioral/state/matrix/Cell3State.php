<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell3State implements IMatrix{
    private $context;
    
    public function __construct(Context $contextNow){
        $this->context=$contextNow;
    }
    
    public function goLeft(){
        echo '2';
        $this->context->setState($this->context->getCell2State());
    }
    public function goRight(){
        // illegal
    }
    public function goUp(){
        // illegal
    }
    public function goDown(){
        echo '6';
        $this->context->setState($this->context->getCell6State());
    }
}
