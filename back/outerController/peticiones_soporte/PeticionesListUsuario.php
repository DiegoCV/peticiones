<?php

include_once realpath('../../innerController/Peticiones_soporteController.php');
 session_start();  
$list=Peticiones_soporteController::listByUsuario($_SESSION['id_usuario']);
$rta="";
foreach ($list as $obj => $Peticiones_soporte) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Peticiones_soporte->getid()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getpeticion()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getfecha_ini()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getfecha_fin()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getsolucion()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getestado()."</td>\n";
	$rta.="<td>".$Peticiones_soporte->getusuario_id()->getid()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;