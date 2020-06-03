<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 $fp = fopen('internacional.json','r');
 //leo y asigno a variable
    $datosjson = fread($fp,filesize('internacional.json'));
    //cierro conexion
    fclose($fp);
    //decodifico 
    $exterior=json_decode($datosjson,true);//con true se transforma en array asociativo
//     foreach ($exterior as $data) {
//         echo "\n\n".$data['nombre']."<br>";
// }

?>
<table>
   <tr>
      <td align=right>Provincia:</td>
      <td align=left colspan=3>
          <!-- Añadido onchange para cargar los pueblos -->
          <select name="provincia" id="provincia" onchange="cargarPueblos();">
              <!-- Hay que terminar los options -->
              <!-- 
                   Eliminado de value la llamada a la función,
                   si eso funciona lo desconocía, y aunque 
                   lo haga es totalmente innecesario, 
                   lo correcto es usar el evento onchange 
                -->
              <option value="">Seleccione una Provincia...</option>
          </select>
      </td>
  </tr>
  <tr>                    
      <td align=right>Pueblo:</td>
      <td align=left colspan=3>
          <select name="pueblo" id="pueblo">
              <!-- Hay que terminar los options -->
              <!-- 
                   Eliminado de value la llamada a la función,
                   si eso funciona lo desconocía, y aunque 
                   lo haga es totalmente innecesario, 
                   lo correcto es usar el evento onchange 
                -->
              <option value="">Seleccione un Pueblo...</option>
          </select>
      </td>
  </tr>
</table>


 <script>
    var array1= new Array1();

 function cargarProvincias() {
    var array = ["Cantabria", "Asturias", "Galicia", "Andalucia", "Extremadura"];
    array.sort();
    addOptions("provincia", array);
}


//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (provincia in array) {
        var opcion = document.createElement("option");
        opcion.text = array[provincia];
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[provincia].toLowerCase()
        selector.add(opcion);
    }
}



function cargarPueblos() {
    // Objeto de provincias con pueblos
    var listaPueblos = {
      cantabria: ["Laredo", "Gama", "Solares", "Castillo", "Santander"],
      asturias: ["Langreo", "Villaviciosa", "Oviedo", "Gijon", "Covadonga"],
      galicia: ["Tui", "Cambados", "Redondella", "Porriño", "Ogrove"],
      andalucia: ["Dos Hermanas", "Écija", "Algeciras", "Marbella", "Sevilla"],
      extremadura: ["Caceres", "Badajoz", "Plasencia", "Zafra", "Merida"]
    }
    
    var provincias = document.getElementById('provincia')
    var pueblos = document.getElementById('pueblo')
    var provinciaSeleccionada = provincias.value
    
    // Se limpian los pueblos
    pueblos.innerHTML = '<option value="">Seleccione un Pueblo...</option>'
    
    if(provinciaSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
      provinciaSeleccionada.sort()
    
      // Insertamos los pueblos
      provinciaSeleccionada.forEach(function(pueblo){
        let opcion = document.createElement('option')
        opcion.value = pueblo
        opcion.text = pueblo
        pueblos.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona
cargarProvincias();
 </script>   
</body>
</html>