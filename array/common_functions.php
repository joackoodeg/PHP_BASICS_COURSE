<?php
    $beers = [
        "Carous",
        "Heineken",
    ];
    
    $beers[]="Brahma";
    print_r($beers);


    if(!in_array("Brahma", $beers)){
        echo "No Existe Brahma"."<br>";
    }else {
        echo "Existe Brahma"."<br>";
    }

    array_pop($beers);
    echo "<br>";
    
    echo count ($beers);
    echo "<br>";
    
    print_r($beers);
    echo "<br>";

    if(in_array("Heineken", $beers)){
        echo "Existe Heineken"."<br>";
    }

    if(!in_array("Brahma", $beers)){
        echo "No Existe Brahma"."<br>";
    }else {
        echo "Existe Brahma"."<br>";
    }

    $beers2=[
        "Ortuzar",
        "Quilmes"
    ];

    $beers_mixed = array_merge($beers, $beers2);
    print_r($beers_mixed);
?>