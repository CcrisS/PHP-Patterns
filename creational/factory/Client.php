<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('CountryFactory.php');
include_once('KyrgyzstanProduct.php');
include_once('MoldovaProduct.php');

class Client {

    private $countryFactory;
    
    public function __construct() 
    {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
        echo '<br><hr><br>';
        echo $this->countryFactory->doFactory(new MoldovaProduct());
    }

}

$worker = new Client();