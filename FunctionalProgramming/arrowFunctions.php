<?php

// FUNCIONES FLECHA (ARROW FUNCTIONS):
// Sintaxis más corta para funciones anónimas
// Solo pueden contener una expresión, cuyo valor se retorna automáticamente

$sum = fn($a, $b) => $a + $b;
$sum_ = fn(float $a, float $b): float => $a + $b;
echo $sum(10, 20).'<br>'; // 30

// ENVIAR COMPORTAMIENTO DIRECTAMENTE:
function show(callable $fn, float $a, float $b){
    return $fn($a, $b).'<br>';
}
echo show(fn($a, $b) => $a + $b, 10,20); // 30