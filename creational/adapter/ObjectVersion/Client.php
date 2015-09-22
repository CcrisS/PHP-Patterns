<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('Mobile.php');
include_once('MobileAdapter.php');


class Client{
    private $mobile;
    private $mobileAdapter;
    
    public function __construct(){
        $this->mobile = new Mobile();
        $this->mobileAdapter = new MobileAdapter($this->mobile);
        $this->mobileAdapter->formatCSS();
        $this->mobileAdapter->formatGraphics();
        $this->mobileAdapter->horizontalLayout();
        $this->mobile->closeHTML();
    }
}

$cliente = new Client();