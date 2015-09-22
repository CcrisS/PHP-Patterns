<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ("Proxy.php");
include_once('../mysql/UniversalConnect.php');

class Client {

    private $proxy;
    private $un;
    private $pw;

    public function __construct() {
        $this->tableMaster = "proxyLog";
        $this->hookup      = UniversalConnect::doConnect();
        $this->un          = $this->un          = $this->hookup->real_escape_string(trim($_POST['uname']));
        $this->pw          = $this->un          = $this->hookup->real_escape_string(trim($_POST['pw']));
        $this->getIface($this->proxy       = new Proxy());
    }

    private function getIface(ISubject $proxy) {
        $proxy->login($this->un, $this->pw);
    }

}

$worker = new Client();