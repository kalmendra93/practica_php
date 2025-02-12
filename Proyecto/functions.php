<?php

/*Declaramos el tipo estricto, para que la url que pasamos a la funcion sea comprobada antes de ser ejecutada.*/

declare(strict_types=1); // <- A nivel de archivo y arriba del todo 

function render_template(string $template, array $data = [])
{
    extract ($data);
    require "templates/$template.php";
}
/*Colocamos tipo de variable que esperamos, pero sin el declare(strict_types) puede aceptarnos 
aun cualquier valor haciendo un casteo de forma transparente*/
function get_data(string $url): array
{
    $result = file_get_contents($url); //Si solo queremos hacer un GET de una API
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "¡Hoy se estrena!",
        $days === 1 => "Mañana se estrena :)",
        $days < 7 => "Esta semana se estrena :O",
        $days < 30 => "Se estrena este mes :D",
        default => "$days días hasta el estreno",
    };
}
