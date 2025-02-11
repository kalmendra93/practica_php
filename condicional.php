<?php
/*
Realizar un programa que envie un mensaje solo si este contiene menos de 100 letras,
caso contrario que salga un mensaje de error
*/

$total_letras = strlen("Hola, ¿como estas? ¿Cuál es tu nombre?");

if ($total_letras < 100) {
    echo "EL mensaje se  puede enviar";
} else {
    echo "No se ha podido enviar el mensaje porque contiene " . $total_letras . " letras.";
}
?>