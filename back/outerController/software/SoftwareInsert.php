<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El gran hermano te vigila  \\
include_once realpath('../../innerController/SoftwareController.php');

$id = $_POST['id'];
$sistemaOperativo = $_POST['sistemaOperativo'];
$Antivirus_id = $_POST['antivirus'];
$antivirus= new Antivirus();
$antivirus->setId($Antivirus_id);
$ofimatica = $_POST['ofimatica'];
$paqueteContable = $_POST['paqueteContable'];
$otros = $_POST['otros'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
SoftwareController::insert($id, $sistemaOperativo, $antivirus, $ofimatica, $paqueteContable, $otros, $cargo);
echo "true";

//That´s all folks!