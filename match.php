<?php

$name = "Almendra";
$age = 31;
$isDev = true;

$output = "Hola $name, con una edad de $age.";
$outputAge = match (true) {
    $age < 2 => "Eres un bebé, $name.",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres un adulto joven, $name",
    default => "Ya mismo rip."
};
$bestLanguages = ["PHP", "Java", "JavaScript", "Python"];
$bestLanguages[] = "TypeScript";

?>
<ul>
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key . " => " . $language ?></li>
    <?php endforeach; ?>
</ul>
<h2><?= $outputAge ?></h2>