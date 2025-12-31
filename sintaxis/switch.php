<?php
    $age = 18;
    switch ($age) {
        case 0:
            echo "Eres un bebé";
            break;
        case ($age >= 1 && $age <= 12):
            echo "Eres un niño";
            break;
        case ($age >= 13 && $age <= 17):
            echo "Eres un adolescente";
            break;
        case ($age >= 18 && $age <= 64):
            echo "Eres un adulto";
            break;
        case ($age >= 65):
            echo "Eres un adulto mayor";
            break;
        default:
            echo "Edad no válida";
            break;
    }
?>