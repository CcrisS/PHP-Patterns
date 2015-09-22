<?php

/**
  * Concrete decorator
  */ 
class Food extends Decorator {

    private $chowNow;
    
    private $snacks = array(
        'piz'   => 'Pizza',
        'burg'  => 'Burgers',
        'nach'  => 'Nachos',
        'veg'   => 'Veggies'
    );

    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    public function setFeature($yum) {
        $this->chowNow = $this->snacks[$yum];
    }

    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat   = "<br>&nbsp;&nbsp;";
        $output.="$fmat Favorite food: ";
        $output.=$this->chowNow;
        return $output;
    }

}
