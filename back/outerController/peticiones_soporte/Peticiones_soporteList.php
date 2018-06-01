<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\
include_once realpath('../../innerController/Peticiones_soporteController.php');

$list=Peticiones_soporteController::listAll();
$rta="";
foreach ($list as $obj => $Peticiones_soporte) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Peticiones_soporte->getid()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getpeticion()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getfecha_ini()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getfecha_fin()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getsolucion()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getestado()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getusuario_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!