<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class_name){
    
    include $class_name.'.php';
    
}

class FlyClient{
    private $fly1;
    private $fly2;
    
    // cloning
    
    private $c1Fly;
    private $c2Fly;
    private $updatedCloneFly;
    
    public function __construct(){
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();
        
        // clone
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        
        $this->updatedCloneFly=clone $this->fly2;
        // update clones
        $this->c1Fly->mated="true";
        $this->c2Fly->fecundity="186";
        $this->updatedCloneFly->eyeColor="purple";
        $this->updatedCloneFly->wingBeat="220";
        $this->updatedCloneFly->unitEyes="750";
        $this->updatedCloneFly->fecundity="92";
        
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);
        
    }
    
    private function showFly(IPrototype $fly){
        echo "Eye color: ".$fly->eyeColor."<br/>";
        echo "Wings beats/second: ".$fly->wingBeat."<br/>";
        echo "Eye units: ".$fly->unitEyes."<br/>";
        $genderNow = $fly::gender;
        echo "Gender: ".$genderNow."<br/>";
        if($genderNow=="FEMALE"){
            echo "Number of eggs: ".$fly->fecundity."<p/>";
        }else{
            echo "Mated: ".$fly->mated."<p/>";
        }
    }
}

$worker = new Client();

?>