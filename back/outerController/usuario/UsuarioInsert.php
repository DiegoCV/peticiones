<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\
include_once realpath('../../innerController/UsuarioController.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$roll = $_POST['roll'];
$estado = $_POST['estado'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
UsuarioController::insert($id, $nombre, $contrasena, $roll, $estado, $cargo);
echo "true";

//That´s all folks!