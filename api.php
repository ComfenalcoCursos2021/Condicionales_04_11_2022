<?php
    $nombre = "miguel";
    switch (ucfirst(strtolower($nombre))) {
        case 'Miguel':
            echo "Bienvenido a netflix";
            break;
        case 'Juan':
            echo "Bienvenido a netflix";
            break;
        default:
            echo "Usuario no valido";
            break;
    }

?>