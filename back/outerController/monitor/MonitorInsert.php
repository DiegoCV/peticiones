<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\
include_once realpath('../../innerController/MonitorController.php');

$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serial = $_POST['serial'];
$pulgadas = $_POST['pulgadas'];
$observacion = $_POST['observacion'];
$estado = $_POST['estado'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
MonitorController::insert($id, $marca, $modelo, $serial, $pulgadas, $observacion, $estado, $cargo);
echo "true";

//That´s all folks!