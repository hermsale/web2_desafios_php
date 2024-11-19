<?php

    // URL de la API de BlueLytics para obtener el tipo de cambio oficial mas reciente
    $apiUrl = "https://api.bluelytics.com.ar/v2/latest";

    // Realizar la solicitud HTTP a la API de BlueLytics y obtener la respuesta
    $response = file_get_contents($apiUrl);

    // Decodificar la respuesta JSON en un arreglo asociativo
    $data = json_decode($response, true);

    // Verificar si se obtuvieron los datos correctamente
    if(isset($data['oficial'])){ // recordamos que isset verifica si no esta vacio o nulo el array asociativo

    // Obtener el tipo de cambio oficial
    $dolar_oficial_compra = $data['oficial']['value_buy'];
    $dolar_oficial_venta = $data['oficial']['value_sell'];
    // Obtener el tipo de cambio blue
    $dolar_blue_compra = $data['blue']['value_buy'];
    $dolar_blue_venta = $data['blue']['value_sell'];
    // Mostrar el tipo de cambio oficial
    echo '
    <form>
        <h2>Tipo de Cambio</h2>

        <fieldset>
            <legend>Dólar Oficial</legend>
            <label for="oficial_compra">Compra:</label>
            <input type="text" id="oficial_compra" value="ARS ' . $dolar_oficial_compra . '" readonly><br>

            <label for="oficial_venta">Venta:</label>
            <input type="text" id="oficial_venta" value="ARS ' . $dolar_oficial_venta . '" readonly>
        </fieldset>

        <fieldset>
            <legend>Dólar Blue</legend>
            <label for="blue_compra">Compra:</label>
            <input type="text" id="blue_compra" value="ARS ' . $dolar_blue_compra . '" readonly><br>

            <label for="blue_venta">Venta:</label>
            <input type="text" id="blue_venta" value="ARS ' . $dolar_blue_venta . '" readonly>
        </fieldset>
    </form>';
}
else{
echo "No se pudieron obtener los datos del tipo de cambio
oficial.";
}
?>