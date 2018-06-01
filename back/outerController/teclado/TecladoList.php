<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\
include_once realpath('../../innerController/TecladoController.php');

$list=TecladoController::listAll();
$rta="";
foreach ($list as $obj => $Teclado) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Teclado->getid()."</td>\n";
	$rta.="<td>".$Teclado->getmarca()."</td>\n";
	$rta.="<td>".$Teclado->getserial()."</td>\n";
	$rta.="<td>".$Teclado->getobservacion()."</td>\n";
	$rta.="<td>".$Teclado->getestado()."</td>\n";
	$rta.="<td>".$Teclado->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!