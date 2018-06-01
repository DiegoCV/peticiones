<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Anarchy! Apoyando la vagancia desde 2017  \\
include_once realpath('../../innerController/AntivirusController.php');

$list=AntivirusController::listAll();
$rta="";
foreach ($list as $obj => $Antivirus) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Antivirus->getid()."</td>\n";
	$rta.="<td>".$Antivirus->getnombre()."</td>\n";
	$rta.="<td>".$Antivirus->getfecha_registro()."</td>\n";
	$rta.="<td>".$Antivirus->getfecha_vencimiento()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!