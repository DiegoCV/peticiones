<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Me han encontrado! ¡No sé cómo pero me han encontrado!  \\
include_once realpath('../../innerController/Peticiones_analisisController.php');

$id = $_POST['id'];
$peticion = $_POST['peticion'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$solucion = $_POST['solucion'];
$estado = $_POST['estado'];
$Usuario_id = $_POST['usuario_id'];
$usuario= new Usuario();
$usuario->setId($Usuario_id);
Peticiones_analisisController::insert($id, $peticion, $fecha_ini, $fecha_fin, $solucion, $estado, $usuario);
echo "true";

//That´s all folks!