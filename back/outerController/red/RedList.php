<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\
include_once realpath('../../innerController/RedController.php');

$list=RedController::listAll();
$rta="";
foreach ($list as $obj => $Red) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Red->getid()."</td>\n";
	$rta.="<td>".$Red->getip()."</td>\n";
	$rta.="<td>".$Red->getmasc()."</td>\n";
	$rta.="<td>".$Red->getpuertaEnlace()."</td>\n";
	$rta.="<td>".$Red->getdns1()."</td>\n";
	$rta.="<td>".$Red->getdns2()."</td>\n";
	$rta.="<td>".$Red->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!