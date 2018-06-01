<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No te olvides de quitar mis comentarios  \\
include_once realpath('../../innerController/MouseController.php');

$id = $_POST['id'];
$marca = $_POST['marca'];
$serial = $_POST['serial'];
$observacion = $_POST['observacion'];
$estado = $_POST['estado'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
MouseController::insert($id, $marca, $serial, $observacion, $estado, $cargo);
echo "true";

//That´s all folks!