<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\
include_once realpath('../../innerController/CargoController.php');

$list=CargoController::listAll();
$rta="";
foreach ($list as $obj => $Cargo) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cargo->getid()."</td>\n";
	$rta.="<td>".$Cargo->getnombre()."</td>\n";
	$rta.="<td>".$Cargo->getdepartamentos_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!