<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\
include_once realpath('../../innerController/ImpresoraController.php');

$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serial = $_POST['serial'];
$tipoConector = $_POST['tipoConector'];
$ipImpresora = $_POST['ipImpresora'];
$observacion = $_POST['observacion'];
$estado = $_POST['estado'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
ImpresoraController::insert($id, $marca, $modelo, $serial, $tipoConector, $ipImpresora, $observacion, $estado, $cargo);
echo "true";

//That´s all folks!