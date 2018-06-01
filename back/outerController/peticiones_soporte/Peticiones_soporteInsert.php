<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Los animales, asombrados, pasaron su mirada del cerdo al hombre, y del hombre al cerdo; y, nuevamente, del cerdo al hombre; pero ya era imposible distinguir quién era uno y quién era otro.  \\
include_once realpath('../../innerController/Peticiones_soporteController.php');

$id = $_POST['id'];
$peticion = $_POST['peticion'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$solucion = $_POST['solucion'];
$estado = $_POST['estado'];
$Usuario_id = $_POST['usuario_id'];
$usuario= new Usuario();
$usuario->setId($Usuario_id);
Peticiones_soporteController::insert($id, $peticion, $fecha_ini, $fecha_fin, $solucion, $estado, $usuario);
echo "true";

//That´s all folks!