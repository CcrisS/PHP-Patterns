<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


include_once('UniversalConnect.php');

class CreateTable {

    private $tableMaster;
    private $hookup;

    public function __construct() {
        $this->tableMaster = "survey";
        $this->hookup      = UniversalConnect::doConnect();

        $drop = "DROP TABLE IF EXISTS " . $this->tableMaster;
        if ($this->hookup->query($drop) === true) {
            printf("Old table %s has been dropped.<br>", $this->tableMaster);
        }
        
        $sql = "CREATE TABLE IF NOT EXISTS $this->tableMaster ("
                . "id SERIAL,"
                . "company NVARCHAR(40),"
                . "devdes  NVARCHAR(10),"
                . "lang    NVARCHAR(15),"
                . "plat    NVARCHAR(15),"
                . "style   NVARCHAR(20),"
                . "device  NVARCHAR(10),"
                . "PRIMARY KEY (id)"
                . ")";
        if ($this->hookup->query($sql) === true) {
            echo "Table $this->tableMaster has been created successfully.<br>";
        }else{
            echo mysqli_error($this->hookup);
            die("error");
        }
        $this->hookup->close();
    }

}

$worker = new CreateTable();
