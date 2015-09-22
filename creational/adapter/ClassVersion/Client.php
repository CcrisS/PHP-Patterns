<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('EuroAdapter.php');
include_once('DollarCalc.php');

class Client {

    private $requestNow;
    private $dollarRequest;

    public function __construct() {
        $this->requestNow    = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro                = "&#8364;";
        echo "Euros: $euro" . $this->makeAdapterRequest($this->requestNow) . '<br>';
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest);
    }

    private function makeAdapterRequest(ITarget $req) {
        return $req->requestCalc(40, 50);
    }

    private function makeDollarRequest(DollarCalc $req) {
        return $req->requestCalc(40, 50);
    }

}

$worker = new Client();
