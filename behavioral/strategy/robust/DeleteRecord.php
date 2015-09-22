<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DeleteRecord implements IStrategy {

    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(Array $dataPack) {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup      = UniversalConnect::doConnect();
        $this->dataPack    = $dataPack;
        $destroy           = $this->dataPack[0];
        $destroy           = intval($destroy);
        $this->sql         = "DELETE FROM $this->tableMaster WHERE id='$destroy'";
//Conditional statement in MySQL query for error checking
        if ($result            = $this->hookup->query($this->sql)) {
            echo "Record #$destroy removed from table: $this->tableMaster";
        } else {
            echo "Removal failed: " . $hookup->error;
        }
    }

}
