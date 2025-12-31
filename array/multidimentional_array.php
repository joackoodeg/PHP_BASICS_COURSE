<?php

$beers = [
    [
        "name" => "Corona",
        "type" => "Lager",
        "alcohol_content" => 4.5,
        "origin" => "Mexico"
    ],
    [
        "name" => "Heineken",
        "type" => "Pale Lager",
        "alcohol_content" => 5.0,
        "origin" => "Netherlands"
    ],
    [
        "name" => "Guinness",
        "type" => "Stout",
        "alcohol_content" => 4.2,
        "origin" => "Ireland"   
    ]
];


foreach($beers as $beer){
    foreach($beer as $key => $value){
        echo $key. ": ". $value. '<br>';
    }
}

