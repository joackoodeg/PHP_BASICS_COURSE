<?php
/**
 * Los namespaces en PHP se utilizan para:
 * 
 * 1. Evitar conflictos de nombres entre clases, funciones y constantes
 * 2. Organizar el código en espacios lógicos y jerárquicos
 * 3. Facilitar la autolocarga automática de clases (PSR-4)
 * 4. Mejorar la legibilidad y mantenibilidad del código en proyectos grandes
 * 5. Permitir que múltiples librerías coexistan sin colisiones de nombres
 * 
 * Ejemplo: namespace App\Controllers; permite tener controladores organizados
 * sin conflicto con otros namespaces como Vendor\Controllers
 */
namespace Utils;

class Operations{
    public function add($a,$b){
        return $a + $b;
    }
}