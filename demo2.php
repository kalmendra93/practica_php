<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
//Iniciamos una nueva sesión de cURL; ch =cURL handle 
$ch = curl_init(API_URL);

#Indicamos que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*Ejecutar la petición y guardamos el resultado. */
$result = curl_exec($ch);

// Una alternatica seria utilizar file_get_contents
// $result =file_get_contents(API_URL); //Si solo queremos hacer un GET de una API

$data = json_decode($result, true);
curl_close($ch);
var_dump($data);
