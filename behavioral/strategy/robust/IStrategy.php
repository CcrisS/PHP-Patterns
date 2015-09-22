<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IStrategy {

    const TABLENOW = "survey";
    public function algorithm(Array $dataPack);
}
