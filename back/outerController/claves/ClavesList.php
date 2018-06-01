<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Puedes sugerirnos frases nuevas, se nos están acabando ( u.u)  \\
include_once realpath('../../innerController/ClavesController.php');

$list=ClavesController::listAll();
$rta="";
foreach ($list as $obj => $Claves) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Claves->getid()."</td>\n";
	$rta.="<td>".$Claves->getwindows_user()."</td>\n";
	$rta.="<td>".$Claves->getwindows_pass()."</td>\n";
	$rta.="<td>".$Claves->getcorreo_user()."</td>\n";
	$rta.="<td>".$Claves->getcorreo_pass()."</td>\n";
	$rta.="<td>".$Claves->getusuario_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!