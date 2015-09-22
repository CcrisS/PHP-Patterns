<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class IComponent {

    protected $site;

    abstract public function getSite();

    abstract public function getPrice();
}
