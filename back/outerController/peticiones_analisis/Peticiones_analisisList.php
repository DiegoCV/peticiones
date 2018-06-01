<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\
include_once realpath('../../innerController/Peticiones_analisisController.php');

$list=Peticiones_analisisController::listAll();
$rta="";
foreach ($list as $obj => $Peticiones_analisis) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Peticiones_analisis->getid()."</td>\n";
	$rta.="<td>".$Peticiones_analisis->getpeticion()."</td>\n";
	$rta.="<td>".$Peticiones_analisis->getfecha_ini()."</td>\n";
	$rta.="<td>".$Peticiones_analisis->getfecha_fin()."</td>\n";
	$rta.="<td>".$Peticiones_analisis->getsolucion()."</td>\n";
	$rta.="<td>".$Peticiones_analisis->getestado()."</td>\n";
	$rta.="<td>".$Peticiones_analisis->getusuario_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!