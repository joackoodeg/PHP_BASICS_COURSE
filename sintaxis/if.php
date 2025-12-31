<?php
    $age = 18;
    if($age>=18 && $age<=65){
        echo "Eres mayor de edad";
    }elseif($age>18 || $age==18){
        echo "Eres mayor de 18";
    }else {
        echo "Eres menor de edad";
    }
?>
