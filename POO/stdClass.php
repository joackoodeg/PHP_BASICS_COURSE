<?php
// Crear elementos dinamicos rapido

$beer = new stdClass();

$beer->name = "Heineken";
$beer->alcohol = 8.5;

echo gettype($beer);
echo '<br>';
echo print_r($beer);