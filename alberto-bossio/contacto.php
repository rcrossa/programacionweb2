    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">

        <title>Formulario De Contacto</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Styles -->
        <link href="css/style/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

    </head>

    <body>
        <?php
        require_once "encabezado.php";
        ?>

        <section>
            <div class="container bg-warning">
                <!--           <fieldset>-->
                <div class="text-center">
                    <h4>Formulario De Contacto</h4>
                </div>

                <form action="#" method="post">
                    <fieldset>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label>Nombre y Apellido</label>
                                    <input type="text" name="nombre" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Área de la empresa</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Teléfono</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea class="form-control" name="comentario" rows="3"></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="col-12">
                            <div class="row">
                                <div class="col-11">
                                    
                                </div>

                                <div class="col-1">
                                    <input type="submit" value="Enviar" name="submit">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <!--            </fieldset>-->
            </div>

            <!--
            <svg width="100%" height="10">
                <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
            </svg>
            -->


            <div id="tab-content-1" class="container-fluid">

                <div class="row">
                    <div class="col-4 text-center">
                        <div class="tab-0a"><a class="text-light" href="../somos/somos.html">Quienes Somos</a></div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="tab-0a"><a class="text-light" href="../formadepago/formadepago.html">Forma De Pago</a></div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="tab-0a"><a class="text-light" href="/..protecciondatos/protecciondatos.html">Protección Datos Personales</a></div>
                    </div>
                </div>

            </div>
        </section>
        <?php
        require_once "footer.php";
        ?>

        <!-- Scripts -->
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/popper/popper.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>


    </body>

    </html>