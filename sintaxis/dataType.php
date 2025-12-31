<?php
    $number = 10; // Integer
    $price = 19.99; // Float
    $isAvailable = true; // Boolean
    $productName = "Laptop"; // String
    $tags = array("Electronics", "Computers", "Sale"); // Array
    $user = null; // Null

    echo "Number: $number\n";
    echo "Price: $price\n";
    echo "Is Available: " . ($isAvailable ? 'Yes' : 'No') . "\n";
    echo "Product Name: $productName\n";
    echo "Tags: " . implode(", ", $tags) . "\n";
    echo "User: " . var_export($user, true) . "\n";

    echo gettype($number) . "\n"; // Outputs: integer
    echo gettype((string)$number) . "\n"; // Outputs: string
    echo gettype($price) . "\n"; // Outputs: double
    echo gettype($isAvailable) . "\n"; // Outputs: boolean  
    echo gettype($productName) . "\n"; // Outputs: string
    echo gettype($tags) . "\n"; // Outputs: array
    echo gettype($user) . "\n"; // Outputs: NULL
?>