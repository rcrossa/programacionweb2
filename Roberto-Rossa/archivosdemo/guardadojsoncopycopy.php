<?php
require_once "americadelnorte.php";
require_once "americadelsur.php";
require_once "argentina.php";
require_once "centroamerica.php";
require_once "europa.php";

$americadelnorte;
$americadelsur;
$argentina;
$centroamerica;
$europa;


//defino variable

echo "----------------";
echo "<br>";
//recorro los elementos del array recibido
foreach ($americadelnorte as $key => $value) {
}
foreach ($americadelsur as $key => $value) {
}
foreach ($argentina as $key => $value) {
}
foreach ($centroamerica as $key => $value) {   
}
foreach ($europa as $key => $value) { 
}

//devuelvo el ultimo elemento agregado
// var_dump(array_pop($productosinternacionales));
// echo "<br>";
// echo "----------------";
// echo "<br>";
// var_dump(array_pop($productosnacionales));
// echo "<br>";
// echo "----------------";
// echo "<br>";

//creo el json si no fue creado
$file1='americadelnorte.json';
$file2='americadelsur.json';
$file3='argentina.json';
$file4='centroamerica.json';
$file5='europa.json';
//codifico
$json_string1=json_encode($americadelnorte);
$json_string2=json_encode($americadelsur);
$json_string3=json_encode($argentina);
$json_string4=json_encode($centroamerica);
$json_string5=json_encode($europa);



//abro los archivos para escribir
$fp1 = fopen('americadelnorte.json','r');
$fp2 = fopen('americadelsur.json','r');
$fp3 = fopen('argentina.json','r');
$fp4 = fopen('centroamerica.json','r');
$fp5 = fopen('europa.json','r');

//escribo contenido
file_put_contents($file1,$json_string1.PHP_EOL);
file_put_contents($file2,$json_string2.PHP_EOL);
file_put_contents($file3,$json_string3.PHP_EOL);
file_put_contents($file4,$json_string4.PHP_EOL);
file_put_contents($file5,$json_string5.PHP_EOL);

//como decodificar y leer archivos:
//leo el primer archivo
$datosjson1= fread($fp1,filesize('americadelnorte.json'));
$datosjson2= fread($fp2,filesize('americadelsur.json'));
$datosjson3= fread($fp3,filesize('argentina.json'));
$datosjson4= fread($fp4,filesize('centroamerica.json'));
$datosjson5= fread($fp5,filesize('europa.json'));
//decodifico
$exterior=json_decode($datosjson1,true);//con true se transforma en array asociativo
foreach ($exterior as $data) {
    echo "\nInternacional:\n ".$data['nombre']."<br>";
}
//decodifico
$americadelsur1=json_decode($datosjson2,true);//con true se transforma en array asociativo
foreach ($americadelsur1 as $data) {
    echo "\n Nacional:\n".$data['nombre']."<br>";
}
//cierro los archivos
fclose($fp1);
fclose($fp2);
// var_dump($c);
echo "<br>";
echo "<br>";
echo "----------------------------";
echo "<br>";
?>
