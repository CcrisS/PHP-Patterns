<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Concrete decorator
class ProgramLang extends Decorator {

    private $languageNow;
    private $language = array(
        'php' => 'PHP',
        'cs'  => 'C#',
        'js'  => 'JavaScript',
        'as3' => 'ActionScript 3.0'
    );

    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    public function setFeature($lan) {
        $this->languageNow = $this->language[$lan];
    }

    public function getFeature() {
        $output  = $this->date->getFeature();
        $fmat    = "<br>&nbsp;&nbsp;";
        $output .= "$fmat Preferred programming language: ";
        $output .= $this->languageNow;
        return $output;
    }

}