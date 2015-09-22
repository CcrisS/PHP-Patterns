<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Female extends IComponent {

    public function __construct() {
        $this->date = "Female";
        $this->setFeature('<br>Girl programmer features: ');
    }

    public function getAge() {
        return $this->ageGroup;
    }

    public function setAge($ageNow) {
        $this->ageGroup = $ageNow;
    }

    public function getFeature() {
        return $this->feature;
    }

    public function setFeature($feature) {
        $this->feature = $feature;
    }

}
