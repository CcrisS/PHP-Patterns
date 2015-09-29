<?php

include_once('SimpleCreator.php');
include_once('GraphicProduct.php');

class GraphicFactory extends SimpleCreator {

    public function startFactory() 
    {
        $product = new GraphicProduct();
        return $product->getProperties();
    }

}
