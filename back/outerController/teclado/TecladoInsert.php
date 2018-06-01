<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\
include_once realpath('../../innerController/TecladoController.php');

$id = $_POST['id'];
$marca = $_POST['marca'];
$serial = $_POST['serial'];
$observacion = $_POST['observacion'];
$estado = $_POST['estado'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
TecladoController::insert($id, $marca, $serial, $observacion, $estado, $cargo);
echo "true";

//That´s all folks!