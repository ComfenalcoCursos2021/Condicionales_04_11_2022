<?php
    $edad = 50;
    $res = match(true){
        ($edad >= 22 && $edad<50) => "Puede entrar al casino",
        ($edad >= 50 && $edad<=60) => "Puede entrar al casino y tiene descuesto",
        $edad >= 18 => "Usted es mayor de edad",
        default => "Usuario no valido"
    };
    echo $res;
?>