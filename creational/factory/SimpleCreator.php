<?php

abstract class SimpleCreator {

    protected abstract function startFactory();

    public function doFactory() 
    {
        return $this->startFactory();
    }

}
