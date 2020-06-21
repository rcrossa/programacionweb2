<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "head.php"; ?>
    <title>Delfos Tour</title>
</head>

<body>

    <?php
    $page = 'index';
    require_once "encabezado.php";
    ?>

    <section>

        <div class="container-fluid">
            <div>
                <img src="images/institucional.jpg" class="d-block w-100 img-fluid" alt="foto empleados de delfos" height="750" width="441">

            </div>

            <div class="row">
                <div>
                    <h1 class="col-xs-12 col-sm-12 col-md-12 col-lg-12">¿Quienes Somos?</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="somosletra">
                        <p>Delfos Tour nació en el año 1998 ofreciendo a sus clientes
                            desde aquel primer momento productos y servicios
                            turísticos de calidad, serios y confiables.</p>
                        <p>Desde un comienzo y en la búsqueda del continuo
                            perfeccionamiento de sus recursos humanos y productos,
                            estamos abocados como equipo a brindar a nuestros clientes asesoramiento inmediato,
                            rapidez en las respuestas, tarifas competitivas y atención personalizada
                            de las inquietudes referentes a los destinos, vuelos y servicios demandados.</p>
                        <p>Con base central en la provincia de Córdoba, contamos con oficinas propias en Buenos Aires,
                            Río Cuarto, Mendoza, Neuquen, Rosario, Santa Fe, Tucuman y Mar del Plata. </p>
                        <p>Por esta razón nuestras operaciones se ven
                            respaldadas en Argentina de una manera excepcional.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <svg width="100%" height="10">
                <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
            </svg>
        </div>

    </section>

    <?php
    require_once "footer.php";
    ?>

</body>

</html>