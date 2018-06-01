<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\
include_once realpath('../../innerController/SesionController.php');

$list=SesionController::listAll();
$rta="";
foreach ($list as $obj => $Sesion) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Sesion->getid()."</td>\n";
	$rta.="<td>".$Sesion->getfecha_ini()."</td>\n";
	$rta.="<td>".$Sesion->getfecha_fin()."</td>\n";
	$rta.="<td>".$Sesion->getusuario()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!