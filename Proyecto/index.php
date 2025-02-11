<?php

//Se usa require, require_once e include
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);

$untilMessage = get_until_message($data["days_until"]);
?>

<?php require 'sections/head.php';
// Escribiendo el require, se va a poder acceder a las variables $data de en donde se esta solicitando el archivo
?>
<?php require 'sections/main.php'; ?>
<?php require 'sections/styles.php'; ?>


