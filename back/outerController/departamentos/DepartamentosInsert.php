<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que hay una vida afuera de tu cuarto?  \\
include_once realpath('../../innerController/DepartamentosController.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
DepartamentosController::insert($id, $nombre);
echo "true";

//That´s all folks!