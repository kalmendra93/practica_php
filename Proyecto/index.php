<?php

//Se usa require, require_once e include
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);

$untilMessage = get_until_message($data["days_until"]);
?>

<?php render_template('head'); ?>
<?php require 'sections/main.php'; ?>
<?php require 'sections/styles.php'; ?>


