<?php

class SuperHero
{
    // Propiedades y los métodos
    // Promoted properties -> desde PHP 8
    public function __construct(public $name, public $powers, public $planet) {}

    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description()
    {
        return "$this->name viene del planeta $this->planet y tiene los siguientes poderes: $this-powers";
    }
}
