<?php

// Este archivo demuestra el uso de interfaces en PHP
// Una interfaz define un contrato que las clases deben cumplir
// Permite que objetos diferentes se usen de la misma manera

interface GetInfo{
    public function getInfo(): string;
}

class Adress implements GetInfo{
    protected $address;

    public function __construct($address)
    {
        $this->address=$address;
    }

    public function getInfo(): string
    {
        return $this->address;
    }

}

class WebSite implements GetInfo{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getInfo(): string
    {
        return file_get_contents($this->url);
    }
}


function printInfo(GetInfo $site){
    echo $site->getInfo();
}

$address = new Adress("calle 123");
printInfo($address);
$web = new WebSite("https://google.com");
printInfo($web);