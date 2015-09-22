<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


include_once('../mysql/UniversalConnect.php');

class CreateTable {

    private $tableMaster;
    private $hookup;

    public function __construct() {
        $this->tableMaster = "proxyLog";
        $this->hookup      = UniversalConnect::doConnect();

        $drop = "DROP TABLE IF EXISTS " . $this->tableMaster;
        if ($this->hookup->query($drop) === true) {
            printf("Old table %s has been dropped.<br>", $this->tableMaster);
        }
        
        $sql = "CREATE TABLE $this->tableMaster (uname NVARCHAR(15), pw NVARCHAR(120))";
        if ($this->hookup->query($sql) === true) {
            echo "Table $this->tableMaster has been created successfully.<br>";
        }else{
            die("error");
        }
        $this->hookup->close();
    }

}

$worker = new CreateTable();
