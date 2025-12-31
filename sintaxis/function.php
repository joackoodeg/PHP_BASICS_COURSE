<?php
hi("Joaquin");
function hi($name){
        echo "Hola, ".$name."<br>";
    }
hi("Pedro");

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 10);
?>