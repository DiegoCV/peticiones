<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\
include_once realpath('../../innerController/RedController.php');

$id = $_POST['id'];
$ip = $_POST['ip'];
$masc = $_POST['masc'];
$puertaEnlace = $_POST['puertaEnlace'];
$dns1 = $_POST['dns1'];
$dns2 = $_POST['dns2'];
$Cargo_id = $_POST['cargo_id'];
$cargo= new Cargo();
$cargo->setId($Cargo_id);
RedController::insert($id, $ip, $masc, $puertaEnlace, $dns1, $dns2, $cargo);
echo "true";

//That´s all folks!