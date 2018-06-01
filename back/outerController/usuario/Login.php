<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Documentaqué?  \\
include_once realpath('../../innerController/UsuarioController.php');

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$usuario = UsuarioController::login($nombre, $contrasena);
if($usuario!=null){
$id=$usuario->getId();
setcookie("id","$id");
echo '<script language="javascript">window.location="../../../front/Main.html"</script>';
}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}

//That´s all folks!