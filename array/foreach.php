<?php
$names = ["Hector", "Joaquin", "Pedro", "Ana"];
$beer = [
    "name" => "Corona",
    "type" => "Lager",
    "alcohol_content" => 4.5,
    "origin" => "Mexico"
];

foreach ($names as $name) {
    echo $name . "<br>";
}

foreach ($beer as $k => $v) {
    echo ($k) . ": " . $v . "<br>";
}

?>