<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\
include_once realpath('../../innerController/CalidadController.php');

$list=CalidadController::listAll();
$rta="";
foreach ($list as $obj => $Calidad) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Calidad->getid()."</td>\n";
	$rta.="<td>".$Calidad->getcargo_id()->getid()."</td>\n";
	$rta.="<td>".$Calidad->getcambio_contra()."</td>\n";
	$rta.="<td>".$Calidad->getbloquea_auto()."</td>\n";
	$rta.="<td>".$Calidad->getbloqueo()."</td>\n";
	$rta.="<td>".$Calidad->getcopia_seguridad()."</td>\n";
	$rta.="<td>".$Calidad->getantivirus()."</td>\n";
	$rta.="<td>".$Calidad->getprogra_no _auto()."</td>\n";
	$rta.="<td>".$Calidad->getcarpeta_compartido()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!