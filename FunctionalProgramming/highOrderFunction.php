<?php

$some = function(float $a, float $b): float {
    return $a + $b;
};

function mul(float $a, float $b): float {
    return $a * $b;
}

function show(callable $fn, float $a, float $b){
    return $fn($a, $b).'<br>';
}

echo show($some, 10,20); // 30
echo show('mul', 10,20); // 200
