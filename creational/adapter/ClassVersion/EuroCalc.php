<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EuroCalc {

    private $euro;
    private $product;
    private $service;
    public $rate = 1;

    public function requestCalc($productNow,$serviceNow){
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->euro=$this->product+$this->service;
        return $this->requestTotal();
    }
    public function requestTotal(){
        $this->euro*=$this->rate;
        return $this->euro;
    }
}
