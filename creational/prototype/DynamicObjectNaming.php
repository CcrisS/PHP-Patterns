<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DynamicObjectNaming implements IPrototype {

    const CONCRETE = " [Concrete] DynamicObjectNaming";

    public function __construct() {
        echo "This was dinamically created <br>";
    }

    public function doWork() {
        echo "<br> This is the assigned task<br>";
    }

    function __clone(){}
}