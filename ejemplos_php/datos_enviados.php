<?php

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    if($usuario == "bsimpson" && $clave == "123456"){
        echo "Bienvenido usuario {$usuario}";
    }
    else{
        echo 'Usuario y/o clave inválido.';
    }


