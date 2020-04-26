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