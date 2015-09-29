<?php

include_once('SimpleCreator.php');
include_once('TextProduct.php');

class TextFactory extends SimpleCreator {

    public function startFactory() 
    {
        $product = new TextProduct();
        return $product->getProperties();
    }

}
