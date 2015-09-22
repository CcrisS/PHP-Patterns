<?php



// Concrete Template Method invokes factory method.

include_once('GraphicFactory.php');
include_once('TextFactory.php');

class TmFac extends TmAb {

    protected function addPix() {
        $this->pix = new GraphicFactory();
        echo $this->pix->doFactory();
    }

    protected function addCaption() {
        $this->cap = new TextFactory();
        echo $this->cap->doFactory();
    }

}
