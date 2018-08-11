<?php

/*
  $myfile = fopen("main.html", "r") or die("Unable to open file!");
  echo fread($myfile, filesize("main.html"));
  fclose($myfile);
 */
include 'phpexcel-master/Classes/PHPExcel/IOFactory.php';
include './phpfiles/clases.php';
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';
include './phpfiles/funciones.php';





//$variableClase = new MiClase();
//echo $variableClase->funcionPrueba();
//$arrayPaniniGrande = new ArrayObject(null ,ArrayObject::ARRAY_AS_PROPS);
//$arrayPaniniGrande->append(new itemGeneral('Test', '1', '2', '3', '4'));

$paninisGrandes = [];
$paninisMedianos = [];
$crepasDulces = [];
$crepasSaladas = [];
$bebidas = [];
$heladoFrito = [];
$postres = [];



//array_push($paninisGrandes, new itemGeneral('Test', '1', '2', '3', '4'));
//array_push($paninisGrandes, new itemGeneral('Test2', '12', '23', '34', '45'));

//$paninisGrandes-> array($paninisGrandes, new itemGeneral('Test2', '12', '23', '34', '45'))

//echo $paninisGrandes[1]->nombre;

include './phpfiles/leeExcel.php';

/*
foreach ($paninisGrandes as $temp) {
    echo var_dump($temp) . '<br>';
}


foreach ($paninisMedianos as $temp) {
    echo var_dump($temp) . '<br>';
    echo $temp->precioNormal;
    echo 'Potato' . $paninisMedianos[1]->precioNormal . '<br>';
}

foreach ($crepasDulces as $temp) {
    echo var_dump($temp) . '<br>';
}

include './phpfiles/mailCode.php';
*/

include './pdv-piezas/startHTML.php';
include './pdv-piezas/head.php';
include './pdv-piezas/startBody.php';

include './pdv-piezas/navbar.php';
include './pdv-piezas/ListaDePaninis.php';
include './pdv-piezas/ListaCrepasDulces.php';
include './pdv-piezas/ListaCrepasSaladas.php';
include './pdv-piezas/masInformacionFlotante.php';

include './pdv-piezas/scriptsJS.php';
include './pdv-piezas/finishBody.php';
include './pdv-piezas/finishHTML.php';





?>

