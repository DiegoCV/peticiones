<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Yo tengo un sueño. El sueño de que mis hijos vivan en un mundo con un único lenguaje de programación.  \\
include_once realpath('../../innerController/ImpresoraController.php');

$list=ImpresoraController::listAll();
$rta="";
foreach ($list as $obj => $Impresora) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Impresora->getid()."</td>\n";
	$rta.="<td>".$Impresora->getmarca()."</td>\n";
	$rta.="<td>".$Impresora->getmodelo()."</td>\n";
	$rta.="<td>".$Impresora->getserial()."</td>\n";
	$rta.="<td>".$Impresora->gettipoConector()."</td>\n";
	$rta.="<td>".$Impresora->getipImpresora()."</td>\n";
	$rta.="<td>".$Impresora->getobservacion()."</td>\n";
	$rta.="<td>".$Impresora->getestado()."</td>\n";
	$rta.="<td>".$Impresora->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!