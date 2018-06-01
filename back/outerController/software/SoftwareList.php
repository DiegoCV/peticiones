<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\
include_once realpath('../../innerController/SoftwareController.php');

$list=SoftwareController::listAll();
$rta="";
foreach ($list as $obj => $Software) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Software->getid()."</td>\n";
	$rta.="<td>".$Software->getsistemaOperativo()."</td>\n";
	$rta.="<td>".$Software->getantivirus()->getid()."</td>\n";
	$rta.="<td>".$Software->getofimatica()."</td>\n";
	$rta.="<td>".$Software->getpaqueteContable()."</td>\n";
	$rta.="<td>".$Software->getotros()."</td>\n";
	$rta.="<td>".$Software->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!