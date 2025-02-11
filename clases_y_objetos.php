<?php

//Clase
class Jugador
{
    //Propiedades de una clase:
    public $nombre;
    public $posicion;
    public $numero;

    //Constuctor:
    public function __construct($nombre, $posicion, $numero)
    {
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    //Métodos de clase:
    public function entrenar()
    {
        echo "El jugador " . $this->nombre . " está entrenando.";
    }

    public function jugar()
    {
        echo "El jugador " . $this->nombre . " jugando.";
    }
}

//Instancias de una clase:
$jugador1 = new Jugador("Messi", "Delantero", 10);
$jugador1->entrenar();

echo '<pre>';
var_dump($jugador1);
echo '</pre>';
