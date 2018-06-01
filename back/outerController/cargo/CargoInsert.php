<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mátalos a todos, y que dios elija  \\
include_once realpath('../../innerController/CargoController.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$Departamentos_id = $_POST['departamentos_id'];
$departamentos= new Departamentos();
$departamentos->setId($Departamentos_id);
CargoController::insert($id, $nombre, $departamentos);
echo "true";

//That´s all folks!