<?php

class SuperHero
{
    //Propiedades y los métdos
    public $name;
    public $powers;
    public $planet;

    public function __construct($name, $powers, $planet)
    {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }
    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description()
    {
        return "$this->name viene del planeta $this->planet y tiene los siguientes poderes: $this-powers";
    }
}
