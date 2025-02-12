<?php

//Clase padre
class SeleccionFutbol
{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function concentrarse()
    {
        echo $this->nombre . " está concentrado.";
    }

    public function viajar()
    {
        echo $this->nombre . " está viajando.";
    }
}

//Clase hija
class Jugador extends SeleccionFutbol
{
    public $posicion;
    public $numero;

    public function __construct($id, $nombre, $edad, $posicion, $numero)
    {
        parent::__construct($id, $nombre, $edad);
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    public function entrenar()
    {
        echo "El jugador " . $this->nombre . " está entrenando.";
    }

    public function jugar()
    {
        echo "El jugador " . $this->nombre . " jugando.";
    }
}


//Clase hija
class Entrenador extends SeleccionFutbol
{
    public $experiencia;

    public function __construct($id, $nombre, $edad, $experiencia)
    {
        parent::__construct($id, $nombre, $edad);
        $this->experiencia = $experiencia;
    }

    public function dirigirEntrenamiento()
    {
        echo "El entrenador " . $this->nombre . " está dirigiendo el entrenamiento.";
    }

    public function dirigirPartido()
    {
        echo "El entrenador " . $this->nombre . " esta dirigiendo el partido.";
    }
}

$jugador1 = new Jugador(123, "Messi", 35, "Delantero", 10);
echo $jugador1->concentrarse();

echo "<br>";
$entrenador1 = new Entrenador(1, "Pepito Grillo", 50, 12);
echo $entrenador1->dirigirPartido();
