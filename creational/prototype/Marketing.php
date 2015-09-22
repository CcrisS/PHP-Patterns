<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once('IAcmePrototype.php');

class Marketing extends IAcmePrototype {

    const UNIT = "Marketing";

    private $sales     = "sales";
    private $promotion = "promotion";
    private $strategic = "strategic planning";

    public function setDept($dept) {
        switch ($dept) {
            case 101:
                $this->dept = $this->sales;
                break;
            case 102:
                $this->dept = $this->promotion;
                break;
            case 103:
                $this->dept = $this->strategic;
                break;
            default:
                $this->dept = "Unrecognized Marketing";
        }
    }

    public function getDept() {
        return $this->dept;
    }

    function __clone() {
        
    }

}
