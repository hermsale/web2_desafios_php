<?php

    /*
        BUCLE DE REPETICIÓN: WHILE
     */

    $intentos = 1;
    $numero_intentos = 3;

    while($intentos <= $numero_intentos){
        echo "Es el ntento número: $intentos" . "\n" ;
        $intentos = $intentos + 1;
    }
    echo "Ha alcanzado el número máximo de intentos permitidos.";

        