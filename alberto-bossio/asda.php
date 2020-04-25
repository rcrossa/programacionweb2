<?php
$producto = array(
    'id_producto' => 10,
    'nombre' => 'Cerro Castor, Usuahia, Argentina',
    'precio' => '$50000',
    'descripción' => 'Un lugar perfecto para esquiar, disfrutá tu país, disfrutá Usuahia',
);

foreach($producto as $indice=>$value){
    echo $indice.': '.$value.'<br />';
}



$producto = array(
    'id_producto' => 11,
    'nombre' => 'Puerto Madryn, Chubut, Argentina',
    'precio' => '$45000',
    'descripción' => 'Un lugar perfecto para nadar, disfrutá tu país, disfrutá Chubut',
);

foreach($producto as $indice=>$value){
    echo $indice.': '.$value.'<br />';
}
?>
<!--
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Delfos Tour</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

     Styles 
    <link href="css/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

</head>

<body>
    <?php
    require_once "archivosphp/funcionesproductoportada.php";
    // archivos html
    require_once "encabezado.php";
    require_once "carousel.php";
    require_once "productoportada.php";
    require_once "linkinteresesyherramientas.php";
    require_once "footer.php";
    ?>

     Scripts 
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

</body>

</html>
-->