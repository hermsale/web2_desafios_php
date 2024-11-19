
function dataUsuario(){
        // XMLHttpRequest - usamos este objeto para las precargas
        // por convencion usamos el xhr
        // JS es un lenguaje que no es oriantado a objetos, por eso hay que instanciarlo. es un lenguaje prototipado. por eso tenemos que instanciarlo. porque se crea objetos de objetos ya creados. esto pasa en JavaScript. Se toma como referencia una clase. NO un objeto. en JS no se trabaja con objetos que se desprenden de clases. 
        // Creamos un nuevo objeto del objeto XML
        const xhr = new XMLHttpRequest();

        // CONFIGURAR SOLICITUD 
        // GET, POST, PUT, DELETE, OPTIONS, HEAD, CONNECT, PATCH
        // METODO GET: obtener datos
        //        metodo | archivo php de donde lo va a obtener | parametor opcional
        xhr.open("GET","datos.php",true); // este es un metodo void, no devuelve nada
       
        xhr.onreadystatechange = function(){
            // verificamos si el estado de la solicitus es exitoso (readyState ==4 y que ademas haya sido exitoso state (200))
            if(xhr.readyState == 4 && xhr.status == 200){
                // mostramos en el div con el id "userData" la info que viene desde datos.php
                document.getElementById("userData").innerHTML = xhr.responseText;
            }
        }
        // esto se encarga de enviar la solicitud
        xhr.send();
}