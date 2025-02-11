<?php
//Revisar código.
const API_URL = "https://whenisthenextmcufilm.com/api";
//Iniciamos una nueva sesión de cURL; ch =cURL handle 
$ch = curl_init(API_URL);

#Indicamos que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*Ejecutar la petición y guardamos el resultado. */
$result = curl_exec($ch);

// Una alternatica seria utilizar file_get_contesnts
// $result =file_get_contents(API_URL); //Si solo queremos hacer un GET de una API

$data = json_decode($result, true);
curl_close($ch);

?>

<head>
    <title>Próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel"= />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
    <pre style="font-size: 2S0px">
        <?php var_dump($data) ?>
    </pre>;
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>