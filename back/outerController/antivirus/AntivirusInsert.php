<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo.  \\
include_once realpath('../../innerController/AntivirusController.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$fecha_registro = $_POST['fecha_registro'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
AntivirusController::insert($id, $nombre, $fecha_registro, $fecha_vencimiento);
echo "true";

//That´s all folks!