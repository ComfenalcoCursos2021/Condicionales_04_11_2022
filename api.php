<?php
    $edad = 1;
    if($edad==0){
        echo "Usuario usted esta muerto";
    }else if($edad>=22){
        echo "Puede entrar al casino ";
        if($edad>=50 && $edad<=60){
            echo "Usuario por su edad tiene un descuesto en nuestro casino";   
        }
    }else if($edad>=18){
        echo "Usted es mayor de edad pero no puede entrar al casino";
    }else{
        echo "Usted es menor de edad ";
    }

?>