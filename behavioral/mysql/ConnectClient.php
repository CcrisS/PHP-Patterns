<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



include_once('UniversalConnect.php');

class ConnectClient{
    private $hookup;
    
    public function __construct(){
        $this->hookup=  UniversalConnect::doConnect();
    }
}   

$worker = new ConnectClient();