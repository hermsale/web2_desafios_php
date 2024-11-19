<?php

// Configurar la zona horaria de Argentina - de manera local en el archivo. solo impacta en el archivo este. 
// date_default_timezone_set('America/Argentina/Buenos_Aires');

// asi por defecto muestra el horario de europa
// $fechaActual = date('Y-m-d H:i:s');

// echo "Fecha y hora: ".$fechaActual;
// debemos modificar la zona horaria

$fechaHorarioOtro = date_default_timezone_get('America/Argentina/Buenos_Aires');
echo "Zona horaria actual: ".$fechaHorarioOtro;

?>