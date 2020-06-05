<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="css/style/style.css" rel="stylesheet">
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
         $fp1 = fopen('americadelnorte.json','r');
         $fp2 = fopen('americadelsur.json','r');
         $fp3 = fopen('argentina.json','r');
         $fp4 = fopen('centroamerica.json','r');
         $fp5 = fopen('europa.json','r');
         //leo y asigno a variable
            $datosjson1 = fread($fp1,filesize('americadelnorte.json'));
            $datosjson2 = fread($fp2,filesize('americadelsur.json'));
            $datosjson3 = fread($fp3,filesize('argentina.json'));
            $datosjson4 = fread($fp4,filesize('centroamerica.json'));
            $datosjson5 = fread($fp5,filesize('europa.json'));
        
           //decodifico 
             $americadelnorte=json_decode($datosjson1,true);
             $americadelsur=json_decode($datosjson2,true);
             $argentina=json_decode($datosjson3,true);
             $centroamerica=json_decode($datosjson4,true);
             $europa=json_decode($datosjson5,true);
            
             //cierro conexion
            fclose($fp1);
            fclose($fp2);
            fclose($fp3);
            fclose($fp4);
            fclose($fp5);
           
        //     foreach ($exterior as $data) {
        //         echo "\n\n".$data['nombre']."<br>";
        // }
        ?>
   
  
    <div class="container pt-4 px-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <div class="filter-wrap py-4">
                    <h3>Filtro</h3>
                    <div class="filter-border p-4 border border-secondary">
                        <div class="filter-inner">
                            <div class="filtrolugar">
                                <div class="row justify-content-center align-items-center">

                                    <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="prueba.php" method="post">
                                        <select id="status" name="status" class="custom-select custom-select-lg"
                                            onChange="mostrar(this.value);">
                                            <!-- Se comenta codigo para muestra en reunion -->
                                            <option value="0"></option>
                                            <option value="americadelnorte">americadelnorte</option> 
                                            <option value="americadelsur">americadelsur</option> 
                                            <option value="centroamerica">centroamerica</option> 
                                            <option value="europa">europa</option> 
                                        </select>
                                    </div>
                                    </form>
                                    <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="prueba.php" name="select1" method="post">
                                        <select id="status1" name="select2"  class="custom-select custom-select-lg" onChange="mostrar1(this.value);">

                                                    <!--                                      
                                                Se comenta codigo para muestra en reunion
                                                -->
                                            <option value="0"></option>
                                            <option value="argentina">Argentina</option>
                                            <option value="Brasil">Brasil</option>
                                            <option value="Peru">Peru</option>
                                            <option value="España">España</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="EEUU">Estados Unidos</option>
                                            <!-- $_SERVER["REQUEST_METHOD"] == "POST") -->
                                            <!-- codigo adicional para implementacion posterior a reunion -->
                                           

                                            <!-- <?php foreach ($nacional as $key => $value) : ?>
                                            <option value="<?php echo $key ?>">
                                                <?php echo $nacional[$key]["nombre"]; ?>
                                            </option>
                                            <?php endforeach ?>  -->
                                           
                                        </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

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

    <div id="americadelnorte" class="element" style="display: none;">
        <h2>America del Norte...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($americadelnorte as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $americadelnorte[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $americadelnorte[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $americadelnorte[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $$americadelnorte[$key]["precio"]; ?></span>
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
    <div id="americadelsur" class="element" style="display: none;">
        <h2>America del sur...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($americadelsur as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $americadelsur[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $americadelsur[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $americadelsur[$key]["descripcion"]; ?></p>
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
    <div id="argentina" class="element" style="display: none;">
        <h2>Argentina...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($argentina as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $argentina[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $argentina[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $argentina[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $argentina[$key]["precio"]; ?></span>
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
    <div id="centroamerica" class="element" style="display: none;">
        <h2>Centroamerica...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                       ?>
                        <?php foreach ($centroamerica as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $centroamerica[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $centroamerica[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $centroamerica[$key]["descripcion"]; ?></p>
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
    <div id="europa" class="element" style="display: none;">
        <h2>Europa...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                       
                        <?php foreach ($europa as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $europa[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $europa[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $europa[$key]["descripcion"]; ?></p>
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

    <!-- $americadelnorte;
    $americadelsur;
    $argentina;
    $centroamerica;
    $europa; -->

    <script>
    function mostrar(id) {
        if (id == "0") {
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }

        if (id == "centroamerica") {
            $("#americadelsur").hide();
            $("#centroamerica").show();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id == "europa") {
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").show();
        }
        if (id == "americadelnorte") {
            $("#americadelsur").hide();
            $("#americadelnorte").show();
            $("#centroamerica").hide();
            $("#europa").hide();
        }
        if (id == "americadelsur") {
            $("#americadelsur").show();
            $("#americadelnorte").hide();
            $("#centroamerica").hide();
            $("#europa").hide();
        }

    }
 
    function mostrar1(id) {
        if (id == "0") {
            $("#Argentina").hide();
            $("#Brasil").hide();
            $("#Peru").hide();
            $("#Espana").hide();
            $("#Mexico").hide();
            ("#EEUU").hide();
        }
        if (id == "argentina") {
            $("#argentina").show();
            $("#Brasil").hide();
            $("#Peru").hide();
            $("#Espana").hide();
            $("#Mexico").hide();
            ("#EEUU").hide();
        }
        if (id== "Brasil") {
            $("#Argentina").hide();
            $("#Brasil").show();
            $("#Peru").hide();
            $("#Espana").hide();
            $("#Mexico").hide();
            ("#EEUU").hide();
        }
        if (id== "Peru") {
            $("#Argentina").hide();
            $("#Brasil").hide();
            $("#Peru").show();
            $("#Espana").hide();
            $("#Mexico").hide();
            ("#EEUU").hide();
        }
        if (id== "Espana") {
            $("#Argentina").hide();
            $("#Brasil").hide();
            $("#Peru").hide();
            $("#Espana").show();
            $("#Mexico").hide();
            ("#EEUU").hide();
        }
        if (id== "Mexico") {
            $("#Argentina").hide();
            $("#Brasil").hide();
            $("#Peru").hide();
            $("#Espana").hide();
            $("#Mexico").show();
            ("#EEUU").hide();
        }
        if (id== "EEUU") {
            $("#Argentina").hide();
            $("#Brasil").hide();
            $("#Peru").hide();
            $("#Espana").hide();
            $("#Mexico").hide();
            ("#EEUU").show();
        }

    }
    </script>

    <script type="text/javascript" src="../js/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/fancybox/jquery.fancybox.min.js"></script>
</body>

</html>