<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <link href="../css/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&family=Rubik:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/fancybox/jquery.fancybox.min.css" />
</head>

<body>
    <?php
    // require_once "funcionesproductoportadainternacional.php";
    // require_once "funcionesproductoportada.php";
    ?>

    <?php 
     
    //  $x=$productosinternacionales;
    //  $x2=$productos
    ?>

    <?php 
         $fp = fopen('internacional.json','r');
         $fp1 = fopen('nacional.json','r');
         //leo y asigno a variable
            $datosjson = fread($fp,filesize('internacional.json'));
            $datosjson1 = fread($fp1,filesize('nacional.json'));
             //decodifico 
             $exterior=json_decode($datosjson,true);//con true se transforma en array asociativo
             $nacional=json_decode($datosjson1,true);//con true se transforma en array asociativo
            //cierro conexion
            fclose($fp);
            fclose($fp1);
           
        //     foreach ($exterior as $data) {
        //         echo "\n\n".$data['nombre']."<br>";
        // }
        ?>
    <!-- <button id="boton-usuarios">Obtener usuarios</button>
		<div class="container">
      <div id="lista-usuarios"></div>
		</div> -->

       

    <form name="formulario" action="prueba.php" method="post">
        Estado actual:
        <select id="status" name="status" onChange="mostrar(this.value);">
            <option value="0"></option>
            <option value="interior">America Del Sur</option>
            <option value="exterior">America del Norte</option>
        </select>
        <!-- <select id="1" name="status" onChange="mostrar(this.value);">
            <option ></option>
            <option value="a">Argentina</option>
        </select> -->
    </form>

    <!-- <div id="interior" class="element" style="display: none;">
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
    </div> -->
    
  <!-- HTML -->
<a name="#ajax-getjson-example"></a>
<div id="example-section38">    
    <div>Car sale report</div>
    <div id="div381"></div>
    <button id="btn382" type="button">Cargar detalle)</button>    
    &nbsp;<a href="/backend/data/car-sale.json" target="_blank">Original car sale report</a>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function (){
            $("#btn382").click(function(){        
                /* set no cache */
                $.ajaxSetup({ cache: false });

                $.getJSON("http://localhost/programacionweb2/roberto-rossa/archivosdemo/internacional.json", function(data){ 
                    var html = [];

                    /* loop through array */
                    $.each(data, function(index, d){            
                        html.push(" nombre : ", d.nombre, "<br>", 
                                " precio : ", d.precio,"<br>",
                                " Descripcion : ", d.descripcion, "<br>",
                                " <img src=",d.url," style:margin-left=10px width=auto", "height=200",">", "<br>",);
                    });


                    $("#div381").html(html.join('')).css("background-color", "orange");
                }).error(function(jqXHR, textStatus, errorThrown){ /* assign handler */
                    /* alert(jqXHR.responseText) */
                    alert("error occurred!");
                });
            });
        });
</script>

    <script>
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
    <!-- <script type="text/javascript" src="../js/fancybox/jquery.fancybox.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="script.js"></script>
</body>

</html>