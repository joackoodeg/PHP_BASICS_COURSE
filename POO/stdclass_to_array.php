<?php
// Crear elementos dinamicos rapido

$beer = new stdClass();

$beer->name = "Heineken";
$beer->alcohol = 8.5;

echo gettype($beer);
echo '<br>';
echo print_r($beer);

$arr = (array) $beer;
echo gettype($arr);
echo '<br>';
echo print_r($arr);

echo '<br>';
echo $arr["name"];

echo '<br>';
echo $arr["alcohol"];
echo '<br>';

// Crear array sin clases:

$arrLocation= [
    "address" => "Calle 123123",
    "country" => "argentina"
];
echo print_r($arrLocation);
echo '<br>';


$objLocation = (object) $arrLocation;
echo print_r($objLocation);
echo '<br>';

