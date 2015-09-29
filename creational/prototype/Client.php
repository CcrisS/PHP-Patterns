<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function __autoload($class_name) 
{
    include $class_name . '.php';
}

class Client {

    private $market;
    private $manage;
    private $engineer;

    public function __construct() 
    {
        $this->market   = new Marketing();
        $this->manage   = new Management();
        $this->engineer = new Engineering();

        $tess = clone $this->market;
        $this->setEmployee($tess, "Tess Smith", 101, "ts101-1234", "tess.png");
        $this->showEmployee($tess);

        $jacob = clone $this->market;
        $this->setEmployee($jacob, "Jacob Jones", 102, "jj101-2234", "jacob.png");
        $this->showEmployee($jacob);

        $ricky = clone $this->manage;
        $this->setEmployee($ricky, "Ricky Rodriguez", 203, "rr203-5634", "ricky.png");
        $this->showEmployee($ricky);

        $olivia = clone $this->engineer;
        $this->setEmployee($olivia, "Olivia Perez", 302, "op301-1278", "olivia.png");
        $this->showEmployee($olivia);

        $john = clone $this->engineer;
        $this->setEmployee($john, "John Jackson", 301, "jj302-1454", "john.png");
        $this->showEmployee($john);
    }


    private function showEmployee(IAcmePrototype $employeeNow) 
    {
        $px = $employeeNow->getEmployeePic();
        echo "<p><img src='$px' width='150' height='150'><br/>";
        echo $employeeNow->getName() . "<br/>";
        echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "<br/>";
        echo $employeeNow->getId() . "</p>";
    }

    private function setEmployee(IAcmePrototype $employee, $name, $dept, $id, $pic)
    {
        $employee->setName($name);
        $employee->setDept($dept);
        $employee->setId($id);
        $employee->setEmployeePic($pic);
    }

}

$worker = new Client();