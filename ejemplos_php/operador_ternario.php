<?php

    /*
        USO DE OPERADOR TERNARIO
     */

    # Ejemplo 1:

    $edad = 18;

    $mayoria_edad = ($edad >= 18)? "Es mayor de edad." : "Es menor de edad.";

    echo $mayoria_edad . PHP_EOL;

    #Ejemplo 2:

    $ingredientes_pizza = "Mozzarella - Tomate - Albahaca";

    $variedad_pizza = ($ingredientes_pizza == "Mozzarella - Tomate - Albahaca") ? "Margarita":
            (($ingredientes_pizza == "Tomate-Anchoas") ? "Anchoas" :
            (($ingredientes_pizza == "Palmitos-Mozzarella-Salsa Golf") ? "Palmitos" : "Variedad desconocida"));

    echo $variedad_pizza; # Imprime "Margarita"
