<?php

// Se declara al inicio para que los datos que pasemos al crear el objeto sean estrictos 
// y la consola se coma cualquier tipo de dato
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
        return "$this->name viene del planeta $this->planet y tiene los siguientes poderes: $powers";
    }

    public static function random()
    {
        $names = ["Thor", "Spiderman", "Aquaman", "Batman"];
        $powers = [
            ["Superfuerza", "Volar", "Visión térmica"],
            ["Respiració acuática", "Hablar con los animales", "Superfuerza"],
            ["Super resistencia", "Control de rayos", "Volar"],
            ["Super inteligencia", "Super detective", "Dinero"]
        ];
        $planets = ["Asgard", "Tierra", "Tierra 65", "Krypton"];

        //Te da el valor
        $name=$names[array_rand($names)];
        $power=$powers[array_rand($powers)];
        $planet=$planets[array_rand($planets)];

        echo "El superheroe $name, que viene del planeta $planet tiene los siguientes poderes: "
        . implode(" ,", $power);
    }
}

SuperHero::random();
