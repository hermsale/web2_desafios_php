<?php

    /*
        ESTRUCTURA CONDICIONAL: IF
    */

    # IF
    $llueve = true;

    if($llueve){
        echo "Llevá paraguas.";
    }

    echo PHP_EOL;

    # IF... ELSE
    $encendido = false ;

    if($encendido == true){
        echo "Las luces están encendidas.";
    }
    else{
        echo "Las luces están apagadas.";
    }

    echo PHP_EOL;

    # IF... ELSEIF
    $personajes = ["Homer", "Marge", "Bart", "Lisa", "Maggie"];
    $personaje_ingresado = "Maggie";

    if($personaje_ingresado == $personajes[0]){
        echo "El personaje es {$personaje_ingresado}." ;
    }
    elseif($personaje_ingresado == $personajes[1]){
        echo "El personaje es {$personaje_ingresado}." ;
    }
    elseif($personaje_ingresado == $personajes[2]){
        echo "El personaje es {$personaje_ingresado}." ;
    }
    elseif($personaje_ingresado == $personajes[3]){
        echo "El personaje es {$personaje_ingresado}." ;
    }
    elseif($personaje_ingresado == $personajes[4]){
        echo "El personaje es {$personaje_ingresado}." ;
    }
    else{
        echo "Personaje desconocido.";
    }