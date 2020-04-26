
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Delfos Tour</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="css/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

</head>

<body>
    <?php
    require_once "archivosphp/funcionesproductoportada.php";
    // archivos html
    require_once "encabezado.php";
    ?>
    

    <div class="container">
        <div class="row pb-5">

            <div class="col-12">
                <div class="filter-wrap py-4">
                    <h3>Filtro</h3>
                    <div class="filter-border p-4 border border-secondary">
                        <div class="filter-inner">
                            <div class="filtrolugar">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <select class="custom-select custom-select-lg">
                                            <option selected>Lugar</option>
                                            <option value="1">Interior</option>
                                            <option value="2">Exterior</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <select class="custom-select custom-select-lg">
                                            <option selected></option>
                                            <option value="1">Premium</option>
                                            <option value="2">Economico</option>
                                        </select>
                                    </div>
                                    <div class="row button">
                                        <div class="col-sm-12 col-lg-2">
                                            <button class="btn btn-danger btn-md px-4">Buscar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <?php
            require_once "productoportada.php";
            ?>
        </div>
    </div>

    <?php
    require_once "linkinteresesyherramientas.php";
    require_once "footer.php";
    ?>

    <!-- Scripts -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

</body>

</html>