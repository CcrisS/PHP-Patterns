<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('UniversalConnect.php');

class ConnectClient{
    private $hookup;
    
    public function __construct(){
        $this->hookup=  UniversalConnect::doConnect();
    }
}   

$worker = new ConnectClient();