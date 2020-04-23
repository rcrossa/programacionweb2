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
