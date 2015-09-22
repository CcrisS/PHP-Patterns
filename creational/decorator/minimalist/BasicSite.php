<?php

/**
 * Concrete Component
 * @package creational/decorator/minimalist/BasicSite.php
 */
class BasicSite extends IComponent
{

    public function __construct()
    {
        $this->site = "Basic site";
    }

    public function getSite()
    {
        return $this->site;
    }

    public function getPrice()
    {
        return 1200;
    }
}