<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
require_once "funcionesproductoportada.php";
require_once "funcionesproductoportadainternacional.php";
?>

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
            <form name="formulario" action="prueba3.php" method="post" onChange="mostrar(this.value);">
                <select name="pueblo" id="pueblo" >
                    <!-- Hay que terminar los options -->
                    <!-- 
                   Eliminado de value la llamada a la función,
                   si eso funciona lo desconocía, y aunque 
                   lo haga es totalmente innecesario, 
                   lo correcto es usar el evento onchange 
                -->
                    <option value="">Seleccione un Pueblo...</option>
                </select>
             </form>   
            </td>
        </tr>
    </table>
    
    <div id="interior" class="element" style="display: none;">
        <h2>Promociones nacionales...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($nacional as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $nacional[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $nacional[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $nacional[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $nacional[$key]["precio"]; ?></span>
                                        </h5>
                                    </div>
                                    <div class="container d-flex justify-content-around">
                                        <a href="#" class="btn btn-success">Comprar</a>
                                        <a href="opiniones.php" class="btn btn-outline-primary">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="exterior" class="element" style="display: none;">
        <h2>Promociones Internacionales...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($exterior as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $exterior[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $exterior[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $exterior[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $exterior[$key]["precio"]; ?></span>
                                        </h5>
                                    </div>
                                    <div class="container d-flex justify-content-around">
                                        <a href="#" class="btn btn-success">Comprar</a>
                                        <a href="opiniones.php" class="btn btn-outline-primary">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php
                foreach ($exterior as $data) {
           echo $prueba3=$data['nombre'];
}
       ?>

    <script type="text/javascript" src="internacional.json"></script>

    <script>
    
    console.log(src="internacional.json");
    function cargarProvincias() {
        var array=[];       
        // var array = ["Cantabria", "Asturias", "Galicia", "Andalucia", "Extremadura"];
            
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

        if (provinciaSeleccionada !== '') {
            // Se seleccionan los pueblos y se ordenan
            provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
            provinciaSeleccionada.sort()

            // Insertamos los pueblos
            provinciaSeleccionada.forEach(function(pueblo) {
                let opcion = document.createElement('option')
                opcion.value = pueblo
                opcion.text = pueblo
                pueblos.add(opcion)
            });
        }

    }

    // Iniciar la carga de provincias solo para comprobar que funciona
    cargarProvincias();

    function mostrar(id) {
        if (id == "0") {
            $("#interior").hide();
            $("#exterior").hide();
        }

        if (id == "interior") {
            $("#interior").show();
            $("#exterior").hide();
        }


        if (id == "exterior") {
            $("#exterior").show();
            $("#interior").hide();
        }

    }
    </script>
</body>

</html>