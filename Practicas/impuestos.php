<?php

class persona
{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimir()
    {
        echo $this->nombre . " tiene " . $this->edad . "\n";
    }
}

class ciudadano extends persona
{
    public $deposito;

    public function __construct($nombre, $edad, $deposito)
    {
        parent::__construct($nombre, $edad);
        $this->deposito = $deposito;
    }

    public function imprimirDatos()
    {
        parent::imprimir();
        echo $this->deposito;
    }

    public function impuesto()
    {
        if ($this->deposito < 3000) {
            echo "No debes de pagar impuestos.";
        } else {
            echo "Debes pagar impuestos.";
        }
    }
}

$ciudadano1=new ciudadano("Almendra", 31, 4000);
$ciudadano1->imprimirDatos();
$ciudadano1->impuesto();
