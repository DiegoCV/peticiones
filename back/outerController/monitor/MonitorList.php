<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\
include_once realpath('../../innerController/MonitorController.php');

$list=MonitorController::listAll();
$rta="";
foreach ($list as $obj => $Monitor) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Monitor->getid()."</td>\n";
	$rta.="<td>".$Monitor->getmarca()."</td>\n";
	$rta.="<td>".$Monitor->getmodelo()."</td>\n";
	$rta.="<td>".$Monitor->getserial()."</td>\n";
	$rta.="<td>".$Monitor->getpulgadas()."</td>\n";
	$rta.="<td>".$Monitor->getobservacion()."</td>\n";
	$rta.="<td>".$Monitor->getestado()."</td>\n";
	$rta.="<td>".$Monitor->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!