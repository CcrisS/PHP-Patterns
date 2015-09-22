<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('EuroCalc.php');
include_once('ITarget.php');

class EuroAdapter extends EuroCalc implements ITarget{
    public function __construct(){
        $this->requester();
    }
    function requester(){
        $this->rate=0.8111;
        return $this->rate;
    }
}