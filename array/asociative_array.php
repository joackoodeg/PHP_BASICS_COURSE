<?php
    $beer = [
        "name" => "Corona",
        "type" => "Lager",
        "alcohol_content" => 4.5,
        "origin" => "Mexico"
    ];
    echo "Beer Name: " . $beer["name"] . "<br>"; // Corona
    echo "Type: " . $beer["type"] . "<br>"; // Lager
    echo "Alcohol Content: " . $beer["alcohol_content"] . "%<br>"; // 4.5%
    echo "Origin: " . $beer["origin"] . "<br>"; // Mexico
    // Agregar un nuevo par clave-valor al array asociativo
    $beer["price"] = 2.5;
    echo "Price: $" . $beer["price"] . "<br>"; // $2.5
?>
