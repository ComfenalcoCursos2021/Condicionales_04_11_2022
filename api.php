<?php
    if(false){
        echo "Correcto if";
    }else{
        if(false){
            echo "Correcto 2 if";
        }else{
            echo "Incorrecto if";
        }
    }
    echo "<br>";
    $res = (false) ? "Correcto linea"
        : ((false) ? "Correcto 2 linea"
        : "Incorrecto linea");

    echo $res;

?>