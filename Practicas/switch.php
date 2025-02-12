<?php
/*
Realiza un programa que imprima cual es tu color favorito.
Mostrar un ejemplo con if-else y con switch

if($color=='Negro'){
    echo 'Tu color favorito es '.$color;
}else{
    echo 'No hay color favorito en memoria';
}
*/
$color="amarillo";

switch($color){
    case "negro":
        echo 'Tu color fav es el negro';
        break;
    case "verde":
        echo "Tu color fav el el verde";
        break;
    default:
        echo "Colores";
}
    
