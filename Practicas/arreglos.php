<?php

//Formas de declarar un array (arreglo)

$arreglo1 = array("Elemento1", 2, true, "Elemento 4", 2.5);
echo '<pre>';
var_dump($arreglo1);
echo '</pre>';


//Clave valor
$arreglo2 = array(
    'nombre' => 'Almendra',
    'edad' => 31,
    'movil' => 651887515,
    'estatura' => 1.59
);

//Agregar campo
$arreglo2['email'] = 'almendra@hotmail.com';

echo '<pre>';
var_dump($arreglo2);
echo '</pre>';
