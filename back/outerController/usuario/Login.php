<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Documentaqué?  \\
include_once realpath('../../innerController/UsuarioController.php');

$nombre = $_POST['cargoId'];
$contrasena = $_POST['contrasena'];
$usuario = UsuarioController::login($nombre, $contrasena);
if($usuario!=null){
$id=$usuario->getId();
$nombre=$usuario->getNombre();
$cargo_id=$usuario->getCargo_id();

 session_start();   
 	$_SESSION['id_usuario'] = $id;
    $_SESSION['cargo_id'] = $cargo_id->getId();
    $_SESSION['nombre_usuario'] = $nombre; 

  
    echo '<script language="javascript">window.location="../../../front/home.php"</script>';




}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}

//That´s all folks!