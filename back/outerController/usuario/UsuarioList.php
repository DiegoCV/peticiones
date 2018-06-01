<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\
include_once realpath('../../innerController/UsuarioController.php');

$list=UsuarioController::listAll();
$rta="";
foreach ($list as $obj => $Usuario) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Usuario->getid()."</td>\n";
	$rta.="<td>".$Usuario->getnombre()."</td>\n";
	$rta.="<td>".$Usuario->getcontrasena()."</td>\n";
	$rta.="<td>".$Usuario->getroll()."</td>\n";
	$rta.="<td>".$Usuario->getestado()."</td>\n";
	$rta.="<td>".$Usuario->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!