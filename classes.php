<?php

declare(strict_types=1);

class SuperHero
{
    // Propiedades y los métodos
    // Promoted properties -> desde PHP 8
    public function __construct(private string $name, public array $powers, public string $planet) {}

    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }

    public function show_all()
    {
        return get_object_vars($this);
    }
    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name viene del planeta $this->planet y tiene los siguientes poderes: $this-powers";
    }
}

$hero = new SuperHero("Superman", ["Superfuerza", "visión térmica", "volar"], "Krypton");

echo $hero->description();
