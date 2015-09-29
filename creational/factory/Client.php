<?php
/* http://cristina.sanz.tidwell.dev.internet.int/uploads/other_projects/others/php_patterns/creational/factory/Client.php */

error_reporting(E_ALL);
ini_set('display_errors', 1);

//include_once ('GraphicFactory.php'); // 1
//include_once ('TextFactory.php'); // 1
include_once('CountryFactory.php');
include_once('KyrgyzstanProduct.php');
include_once('MoldovaProduct.php');

class Client {

    // private $someGraphicObject; //1
    // private $someTextObject; //1
    private $countryFactory;
    
    public function __construct() {
        // $this->someGraphicObject = new GraphicFactory(); //1
        // echo $this->someGraphicObject->startFactory() . '<br>'; //1
        // $this->someTextObject    = new TextFactory(); //1
        // echo $this->someTextObject->startFactory() . '<br>'; //1

        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
        echo '<br><hr><br>';
        echo $this->countryFactory->doFactory(new MoldovaProduct());
    }

}

$worker = new Client();