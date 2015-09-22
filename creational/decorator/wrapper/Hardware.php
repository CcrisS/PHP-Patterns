<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Concrete decorator
class Hardware extends Decorator {

    private $hardwareNow;
    private $box = array(
        'mac' => 'Macintosh',
        'dell'  => 'Dell',
        'hp'  => 'Hewlett-Packard',
        'lin' => 'Linux'
    );

    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    public function setFeature($box) {
        $this->hardwareNow = $this->box[$box];
    }

    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat   = "<br>&nbsp;&nbsp;";
        $output.="$fmat Current Hardware: ";
        $output.=$this->hardwareNow;
        return $output;
    }

}
