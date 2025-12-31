<?php
// Usar elementos externos en funciones anónimas
$const = 5;

$some = function(float $a, float $b) use($const): float {
    return $a+ $b + $const;
};

function show(callable $fn, float $a, float $b){
    return $fn($a, $b).'<br>';
}

show($some, 4,5);

?>