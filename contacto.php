    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">

        <title>Formulario De Contacto</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Styles -->
        <link href="css/style/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
            rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

    </head>

    <body>
        <?php
        require_once "encabezado.php";
   ?>
        <section>
            <div class="container">
                <!--           <fieldset>-->
                <div>
                    <h1>Formulario De Contacto</h1>
                </div>

                <form action="#" method="get">
                    <fieldset>
                        <div>
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div>
                            <label>apellido</label>
                            <input type="text" name="apellido" class="form-control">
                        </div>
                        <div>
                            <label>email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div>
                            <label>telefono</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div>
                            <label>Area de la empresa</label>
                            <input type="text" name="areaempresa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea class="form-control" name="comentario" rows="3"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Enviar">
                        </div>
                    </fieldset>
                </form>
                <!--            </fieldset>-->
            </div>

            <svg width="100%" height="10">
                <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
            </svg>


            <div id="tab-content-1" class="container-fluid">

                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tab-0a"><a class="text-light" href="../somos/somos.html">Quienes Somos</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tab-1a"><a class="text-light" href="../formadepago/formadepago.html">Forma De
                                Pago</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tab-2a"><a class="text-light"
                                href="/..protecciondatos/protecciondatos.html">Protección Datos Personales</a></div>
                    </div>
                </div>

            </div>
        </section>
        <?php
    require_once "footer.php";
?>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>


    </body>

    </html>