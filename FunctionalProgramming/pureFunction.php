<?php

class Counter{
    public int $count=0;
}

$counter = new Counter();
/**
 * Esta función no es pura porque:
 * - Modifica estado externo (variables globales, propiedades de objetos, etc.)
 * - Tiene efectos secundarios (escritura en archivos, bases de datos, etc.)
 * - Su resultado depende de factores externos que pueden cambiar entre llamadas
 * - No produce el mismo resultado con las mismas entradas
 * 
 * Una función pura debería:
 * - Solo depender de sus parámetros de entrada
 * - No modificar estado externo
 * - Retornar siempre el mismo resultado para las mismas entradas
 */
function show(Counter $counter){
    $counter->count++;
    return $counter->count.'<br>';
}


function add(float $a, float $b): float{
    return $a + $b;
}