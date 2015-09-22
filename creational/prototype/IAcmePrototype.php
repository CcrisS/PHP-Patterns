<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class IAcmePrototype {

    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    abstract function setDept($dept);

    abstract function getDept();

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmployeePic() {
        return $this->employeePic;
    }

    public function setEmployeePic($employeePic) {
        $this->employeePic = $employeePic;
    }
    
    abstract function __clone();

}
