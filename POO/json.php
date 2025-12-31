<?php

class Beer{
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct($name,$brand,$alcohol,$isStrong)
    {
        $this->name=$name;
        $this->brand=$brand;
        $this->alcohol=$alcohol;
        $this->isStrong=$isStrong;
    }

}

/// OBJETO A JSON - JSON A OBJETO

$beer = new Beer("Red", "Heineken", 4.2, true);

$json = json_encode($beer);
echo $json;
echo "<br>";

$json_beer = '{"name":"Red","brand":"Heineken","alcohol":4.20000000000000017763568394002504646778106689453125,"isStrong":true}';
$objBeer = json_decode($json_beer);
print_r($objBeer);

/// ARREGLO A JSON

$arr = [
    "name" => "joa",
    "country"=>"arg"
];

$newJson = json_encode($arr);

// true para q sea tratado como arrego y no como objeto
$newArr = json_decode($newJson, true);

echo $newArr["country"];