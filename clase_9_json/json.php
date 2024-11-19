<?php
    // Función json_encode()
    // La función json_encode() en PHP se utiliza para convertir datos PHP en formato JSON.

    // $data: Es el dato PHP que deseamos convertir a JSON. Puede ser un arreglo, un objeto, una cadena, un número, un booleano
    // o null.

    // creamos un array asociativo. la funcion array() se utiliza para definir un array en php. Aunque tambien se puede usar []
    $data = array("nombre" => "juan", "edad" => 30, "ciudad" => "Argentina");
    $data2 =  [
                ["nombre" => "juan", "edad" => 30, "ciudad" => "Argentina"],
                ["nombre" => "marcelo", "edad" => 34, "ciudad" => "Argentina"],
                ["nombre" => "Alejandro", "edad" => 34, "ciudad" => "Argentina"]
    ];// array declarado con [] . de esta manera podemos declarar varios datos en el json

    // conversion
    $jsonData = json_encode($data); // convertimos el array a json
    $jsonData2 = json_encode($data2); // convertimos el array a json

    echo $jsonData, $jsonData2;

    // Función json_decode()
    // La función json_decode() en PHP se utiliza para convertir una cadena de texto en formato JSON en una estructura de datos PHP. Esto es
    // útil cuando necesitamos procesar datos JSON recibidos de una API
    // externa o almacenados en un archivo.

    // $json: Es la cadena JSON que deseamos decodificar en datos PHP.
    $jsonString = '{"nombre":"María","edad":25,"ciudad":"Barcelona"}'; // esta linea es una cadena formato JSON que se guarda en jsonString
    $phpData = json_decode($jsonString, true); // convierte el JSON a una estructura PHP, el true indica que el array debe ser asociativo
    var_dump($phpData); // el var_dump  imprime el tipo y contenido detallado de la variable.
    
    // si no pasamos el parametro true, no convierte en array asociativo, y se puede acceder a las propiedades como un objeto
    $phpData2 = json_decode($jsonString);
    echo "el nombre es ".$phpData2->nombre." Su edad: ".$phpData2->edad." y la ciudad donde vive es ".$phpData2->ciudad;

    // en este caso se debe utilizar un ciclo de repeticion ya que es un array con varios elementos
    echo "\n";
    $dataJsonConvert = json_decode($jsonData2);
    foreach($dataJsonConvert as $persona){
        echo "el nombre es ".$persona->nombre." Su edad: ".$persona->edad;
    }

    // modificando un valor 
    $dataJsonConvert[0]->edad = 35; // cambio el valor de la edad a Juan
    $jsonDataConvertido = json_encode($dataJsonConvert); // convierte el array a json
    // visualizamos el JSON modificado
    echo "<br>". $jsonDataConvertido;

    echo "<br> agregamos telefono <br>";
    // agregar nuevos elementos a un objeto JSON
    $dataJsonConvert[0]->telefono = "1131147481"; // agregamos un nuevo
    $dataJsonConvert[1]->telefono = "45223218";
    $jsonDataConvertido = json_encode($dataJsonConvert); // convierte el array a json
    // visualizamos el JSON modificado
    echo "<br>". $jsonDataConvertido;
     
?>