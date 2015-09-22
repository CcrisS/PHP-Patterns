<?php

/**
 * Decorator participant
 * @package creational/decorator/minimalist/Decorator.php
 */
abstract class Decorator extends IComponent 
{
	// Inherits both getSite() and getPrice()
	// This is still an abstract class and there's no need to implement either abstract method here
	// Its job is to maintain reference to Component

	// public function getSite() { }
	// public function getPrice() { }
}
