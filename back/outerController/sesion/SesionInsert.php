<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\
include_once realpath('../../innerController/SesionController.php');

$id = $_POST['id'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$Usuario_id = $_POST['usuario'];
$usuario= new Usuario();
$usuario->setId($Usuario_id);
SesionController::insert($id, $fecha_ini, $fecha_fin, $usuario);
echo "true";

//That´s all folks!