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
         $fp6 = fopen('brasil.json','r');
         $fp7 =fopen('eeuu.json','r');
         $fp8 =fopen('canada.json','r');
         $fp9 =fopen('espana.json','r');
         $fp10 =fopen('mexico.json','r');
         $fp11 =fopen('peru.json','r');
         //leo y asigno a variable
         
            $datosjson1 = fread($fp1,filesize('americadelnorte.json'));
            $datosjson2 = fread($fp2,filesize('americadelsur.json'));
            $datosjson3 = fread($fp3,filesize('argentina.json'));
            $datosjson4 = fread($fp4,filesize('centroamerica.json'));
            $datosjson5 = fread($fp5,filesize('europa.json'));
            $datosjson6 = fread($fp6,filesize('brasil.json'));
            $datosjson7 = fread($fp7,filesize('eeuu.json'));
            $datosjson8 = fread($fp8,filesize('canada.json'));
            $datosjson9 = fread($fp9,filesize('espana.json'));
            $datosjson10 = fread($fp10,filesize('mexico.json'));
            $datosjson11 = fread($fp11,filesize('peru.json'));



        
           //decodifico 
             $americadelnorte=json_decode($datosjson1,true);
             $americadelsur=json_decode($datosjson2,true);
             $argentina=json_decode($datosjson3,true);
             $centroamerica=json_decode($datosjson4,true);
             $europa=json_decode($datosjson5,true);
             $brasil=json_decode($datosjson6,true);
             $eeuu=json_decode($datosjson7,true);
             $canada=json_decode($datosjson8,true);
             $espana = json_decode($datosjson9,true);
             $mexico = json_decode($datosjson10,true);
             $peru = json_decode($datosjson11,true);
             //cierro conexion
            fclose($fp1);
            fclose($fp2);
            fclose($fp3);
            fclose($fp4);
            fclose($fp5);
            fclose($fp6);
            fclose($fp7);
            fclose($fp8);
            fclose($fp9);
            fclose($fp10);
            fclose($fp11);

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
                                    <form action="prueba.php" name="status" method="post">
                                        <select id="status1" name="select2"  class="custom-select custom-select-lg" onChange="mostrar1(this.value);">

                                                    <!--                                      
                                                Se comenta codigo para muestra en reunion
                                                -->
                                            <option value="0"></option>
                                            <option value="argentina">Argentina</option>
                                            <option value="brasil">Brasil</option>
                                            <option value="peru">Peru</option>
                                            <option value="espana">España</option>
                                            <option value="mexico">Mexico</option>
                                            <option value="eeuu">Estados Unidos</option>
                                            <option value="canada">Canada</option>
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
        Filtro por continente:
        <select id="status" name="select1"  onChange="mostrar(this.value);">
                                            
                                            <option value="0"></option>
                                            <option value="americadelnorte">americadelnorte</option> 
                                            <option value="americadelsur">americadelsur</option> 
                                            <option value="centroamerica">centroamerica</option> 
                                            <option value="europa">europa</option> 
                                        </select>
        <!-- <select id="1" name="status" onChange="mostrar(this.value);">
            <option ></option>
            <option value="a">Argentina</option>
        </select> -->
    </form>
    <form name="formulario" action="prueba.php" method="post">
        Filtro por pais:
        <select id="status1" name="select2"  onChange="mostrar1(this.value);">
                                            <option value="0"></option>
                                            <option value="argentina">Argentina</option>
                                            <option value="brasil">Brasil</option>
                                            <option value="peru">Peru</option>
                                            <option value="espana">España</option>
                                            <option value="mexico">Mexico</option>
                                            <option value="eeuu">Estados Unidos</option>
                                            <option value="canada">Canada</option>
                                            <!-- $_SERVER["REQUEST_METHOD"] == "POST") -->
                                            <!-- codigo adicional para implementacion posterior a reunion -->
                                            <!-- <?php foreach ($nacional as $key => $value) : ?>
                                            <option value="<?php echo $key ?>">
                                                <?php echo $nacional[$key]["nombre"]; ?>
                                            </option>
                                            <?php endforeach ?>  -->
                                        </select>
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
                                                class="card-text text-center badge badge-light"><?php echo $americadelnorte[$key]["precio"]; ?></span>
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
                                                class="card-text text-center badge badge-light"><?php echo $americadelsur[$key]["precio"]; ?></span>
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
                    <div class="row">                       
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
                                                class="card-text text-center badge badge-light"><?php echo $centroamerica[$key]["precio"]; ?></span>
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
                                                class="card-text text-center badge badge-light"><?php echo $europa[$key]["precio"]; ?></span>
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
    <div id="brasil" class="element" style="display: none;">
        <h2>Brasil...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($brasil as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $brasil[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $brasil[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $brasil[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $brasil[$key]["precio"]; ?></span>
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
    <div id="peru" class="element" style="display: none;">
        <h2>Peru...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($peru as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $peru[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $peru[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $peru[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $peru[$key]["precio"]; ?></span>
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
    <div id="espana" class="element" style="display: none;">
        <h2>España...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($espana as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $espana[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $espana[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $espana[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $espana[$key]["precio"]; ?></span>
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
    <div id="mexico" class="element" style="display: none;">
        <h2>Mexico...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($mexico as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $mexico[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $mexico[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $mexico[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $mexico[$key]["precio"]; ?></span>
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
    <div id="eeuu" class="element" style="display: none;">
        <h2>Estados Unidos...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($eeuu as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $eeuu[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $eeuu[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $eeuu[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $eeuu[$key]["precio"]; ?></span>
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
    <div id="canada" class="element" style="display: none;">
        <h2>Canada...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">                      
                        <?php foreach ($canada as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $canada[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $canada[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $canada[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $canada[$key]["precio"]; ?></span>
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
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
        }

        if (id == "centroamerica") {
            $("#americadelsur").hide();
            $("#centroamerica").show();
            $("#americadelnorte").hide();
            $("#europa").hide();
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
        }
        if (id == "europa") {
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").show();
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
        }
        if (id == "americadelnorte") {
            $("#americadelsur").hide();
            $("#americadelnorte").show();
            $("#centroamerica").hide();
            $("#europa").hide();
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
        }
        if (id == "americadelsur") {
            $("#americadelsur").show();
            $("#americadelnorte").hide();
            $("#centroamerica").hide();
            $("#europa").hide();
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
        }

    }
 
    function mostrar1(id) {
        
        if (id == "0") {
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
        }
        if (id == "argentina") {
            $("#argentina").show();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id== "brasil") {
            $("#argentina").hide();
            $("#brasil").show();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id== "peru") {
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").show();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id== "espana") {
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").show();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").hide();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id== "mexico") {
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").show();
            $("#eeuu").hide();
            $("#canada").hide();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id== "eeuu") {
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").show();
            $("#canada").hide();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }
        if (id== "canada") {
            $("#argentina").hide();
            $("#brasil").hide();
            $("#peru").hide();
            $("#espana").hide();
            $("#mexico").hide();
            $("#eeuu").hide();
            $("#canada").show();
            $("#americadelsur").hide();
            $("#centroamerica").hide();
            $("#americadelnorte").hide();
            $("#europa").hide();
        }

    }

    function seleccion(value){
         var select=document.getElementById("select2");
 		// Cogemos el listado de opciones en un array de valores
		var op=select.getElementsByTagName("option")
 		// Seleccionamos la primera opción
		select.options[0].selected=true;
 		// Recorremos todas las opciones del segundo select
		for (var i = 1; i < op.length; i++) {
 			if(op[i].value == value)
			{
				// Si coincide, lo desmarcamos o escondemos
 				//(selecciona una de las dos opciones)
 // 				op[i].disabled = true;
				op[i].style.display="none";
			}else{
				// Si no coincide, lo marcamos o mostramos
 				//(selecciona una de las dos opciones)
 // 				op[i].disabled = false;
				op[i].style.display="block";
			}
		}
    }
    </script>

    <script type="text/javascript" src="../js/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/fancybox/jquery.fancybox.min.js"></script>
    <script src="script.js"></script>
</body>

</html>