<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\
include_once realpath('../../innerController/CpuController.php');

$list=CpuController::listAll();
$rta="";
foreach ($list as $obj => $Cpu) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cpu->getid()."</td>\n";
	$rta.="<td>".$Cpu->gettipoCpu()."</td>\n";
	$rta.="<td>".$Cpu->getmarca()."</td>\n";
	$rta.="<td>".$Cpu->getmodelo()."</td>\n";
	$rta.="<td>".$Cpu->getserial()."</td>\n";
	$rta.="<td>".$Cpu->getmemoria()."</td>\n";
	$rta.="<td>".$Cpu->getdiscoduro()."</td>\n";
	$rta.="<td>".$Cpu->getprocesador()."</td>\n";
	$rta.="<td>".$Cpu->getdvd()."</td>\n";
	$rta.="<td>".$Cpu->getobservacion()."</td>\n";
	$rta.="<td>".$Cpu->getestado()."</td>\n";
	$rta.="<td>".$Cpu->getcargo_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!