
<?php
// VARIABLE SUPER GLOBAL SON ARRAYS ASOCIATIVOS $_SERVER['posicion1']['posicion2]
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['descripcion'];
    
    // voy a aplicar un sanitizado 
    $nombreSanitizado = htmlspecialchars($nombre);

    echo "estas usando POST!";
}