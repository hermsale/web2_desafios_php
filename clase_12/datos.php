<?php

// realizamos un array asociativo
$user = [
    "nombre" => "Alejandro",
    "apellido" => "Herms",
    "email" => "hermsale@gmail.com"
];

// crear la respuesta que va a ir para el html

echo  "<p>".$user['nombre']."</p>";
echo  "<p>".$user['apellido']."</p>";
echo  "<p>".$user['email']."</p>";