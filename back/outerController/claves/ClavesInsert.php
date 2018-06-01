<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\
include_once realpath('../../innerController/ClavesController.php');

$id = $_POST['id'];
$windows_user = $_POST['windows_user'];
$windows_pass = $_POST['windows_pass'];
$correo_user = $_POST['correo_user'];
$correo_pass = $_POST['correo_pass'];
$Usuario_id = $_POST['usuario_id'];
$usuario= new Usuario();
$usuario->setId($Usuario_id);
ClavesController::insert($id, $windows_user, $windows_pass, $correo_user, $correo_pass, $usuario);
echo "true";

//That´s all folks!