<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IConnectInfo {

    const HOST   = "localhost";
    const UNAME  = "alpha";
    const PW     = "beta";
    const DBNAME = "gamma";

    public function doConnect();
}
