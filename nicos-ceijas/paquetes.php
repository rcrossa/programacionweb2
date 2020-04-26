<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos/estilos.css">
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <?php include_once ("info-paquete.php");?>
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-8">
                <img src="img/paquete<?php echo ($paquetes["img"]);?>.jpg">
            </div>
            <div class="col-4">
                <h3> <?php echo ($paquetes["nombre"]);?> </h3>
                <p><?php echo ($paquetes["descripcion"]);?></p>
            </div>
        </div>    
    </div>

    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-8">
                <img src="img/paquete3.jpg">
            </div>
            <div class="col-4">
                <h3>París</h3>
                <p>Acá la info del paquete</p>
            </div>
        </div>    
    </div>

    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-8">
                <img src="img/paquete2.jpg">
            </div>
            <div class="col-4">
                <h3>Grecia y Turquía</h3>
                <p>Acá la info del paquete</p>
            </div>
        </div>    
    </div>
</body>
</html>