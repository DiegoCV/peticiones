<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo.  \\
include_once realpath('../../innerController/MouseController.php');

$list=MouseController::listAll();
$rta="";
foreach ($list as $obj => $Mouse) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Mouse->getid()."</td>\n";
	$rta.="<td>".$Mouse->getmarca()."</td>\n";
	$rta.="<td>".$Mouse->getserial()."</td>\n";
	$rta.="<td>".$Mouse->getobservacion()."</td>\n";
	$rta.="<td>".$Mouse->getestado()."</td>\n";
	$rta.="<td>".$Mouse->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!