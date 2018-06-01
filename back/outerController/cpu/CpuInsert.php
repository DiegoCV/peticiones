<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\
include_once realpath('../../innerController/CpuController.php');

$id = $_POST['id'];
$tipoCpu = $_POST['tipoCpu'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serial = $_POST['serial'];
$memoria = $_POST['memoria'];
$discoduro = $_POST['discoduro'];
$procesador = $_POST['procesador'];
$dvd = $_POST['dvd'];
$observacion = $_POST['observacion'];
$estado = $_POST['estado'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
CpuController::insert($id, $tipoCpu, $marca, $modelo, $serial, $memoria, $discoduro, $procesador, $dvd, $observacion, $estado, $cargo);
echo "true";

//That´s all folks!