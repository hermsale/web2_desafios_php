<?php

    /*
        BUCLE DE REPETICIÓN: FOREACH
            - SENTENCIA BREAK
            - SENTENCIA CONTINUE
    */

    # Recorremos un array numérico
    $pizzas = ["Napolitana", "Margarita", "Jamón y Morrones", "Jamón Crudo y Rúcula", "Palmitos"];

    foreach($pizzas as $pizza){
        echo $pizza . PHP_EOL; // PHP_EOL sirve para generar un salto de linea 
    }

    # Recorremos un array asociativo
    $autos = ["F" => "Fiat", "R" => "Renault", "T" => "Toyota"];

    foreach($autos as $clave => $valor){
         echo $clave . "es: " . $valor . "\n";
    }

    # Uso de "break"
    $familia_simpson = ["Homer", "Marge", "Bart", "Lisa", "Maggie"];

    foreach($familia_simpson as $integrante){
        if($integrante == "Bart"){
            echo "{$integrante} fue encontrado en el array.";
            break; # Si encuentra el elemento detiene la ejecución
        }
        echo "{$integrante}" . PHP_EOL;
    }

    echo "\n";

    # Uso de "continue"
    $familia_simpson = ["Homer", "Marge", "Bart", "Lisa", "Maggie"];

    foreach($familia_simpson as $integrante){
        if($integrante == "Bart"){
            continue; # Si encuentra el elemento lo pasa por alto y continúa con la ejecución
        }
        echo "{$integrante}" . PHP_EOL;
    }

