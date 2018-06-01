<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\
include_once realpath('../../innerController/CalidadController.php');

$id = $_POST['id'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
$cambio_contra = $_POST['cambio_contra'];
$bloquea_auto = $_POST['bloquea_auto'];
$bloqueo = $_POST['bloqueo'];
$copia_seguridad = $_POST['copia_seguridad'];
$antivirus = $_POST['antivirus'];
$progra_no _auto = $_POST['progra_no _auto'];
$carpeta_compartido = $_POST['carpeta_compartido'];
CalidadController::insert($id, $cargo, $cambio_contra, $bloquea_auto, $bloqueo, $copia_seguridad, $antivirus, $progra_no _auto, $carpeta_compartido);
echo "true";

//That´s all folks!