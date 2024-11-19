<?php

    /*
        ARREGLOS:
            - NUMÉRICOS
            - ASOCIATIVOS
            - MULTIDEMENSIONALES
     */

    # Ejemplo 1: Arreglo Numérico o Indexadado (se accede a los elementos a través de su posición "index")
    $personajes_dc = array("Superman", "Batman", "Mujer Maravilla");

    echo $personajes_dc[0] . "\n"; # Imprime "Superman"
    echo $personajes_dc[1] . "\n"; # Imprime "Bartman"
    echo $personajes_dc[2] . "\n"; # Imprime "Mujer Maravilla"

    echo "\n";

    # Ejemplo 2: Arreglo Asociativo (se accede a los valores de los elementos a través de sus respectivas "claves")
    $superheros_marvel = [
        "Iron Man" => "Tony Stark",
        "Capitán América" => "Steve Rogers",
        "Thor" => "Chris Hemsworth",
        "Hulk" => "Bruce Banner",
        "Loki" => "Tom Hiddleston",
    ];

    echo "\n";

    echo $superheros_marvel["Iron Man"] . "\n";
    echo $superheros_marvel["Loki"] . "\n";

    echo "\n";

    # Ejemplo 3> Arreglo Multidemensioinal (se accede a través de sus posiciones "index" o "clave" según el tipo de array contenido
    $superheros = array(
        array( # array numérico
            "Iron-Man" => array(
                "nombre" => "Iron-Man",
                "superpoder" => "Inteligencia y Conocimiento en Armas",
                "edad" => "41"
            )
        ),
        "DC" => array( # array asociativo
            "Superman" => array(
                "nombre" => "Superman",
                "superpoder" => "Fuerza, Rayos-X, Volar",
                "edad" => "39"
            )
        )
    );

    var_dump($superheros); # Imprime el array con sus dimensiones
    var_dump($superheros[0]["Iron-Man"]["superpoder"]); # Imprime "Inteligencia y Conocimiento en Armas"
    var_dump($superheros["DC"]["Superman"]["superpoder"]); # Imprime "Fuerza, Rayos-X, Volar"
