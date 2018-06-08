<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\
include_once realpath('../../innerController/CargoController.php');

$list=CargoController::listAll();
$rta='';
foreach ($list as $obj => $Cargo) {	
	$rta.='<option value="'.$Cargo->getid().'">'.$Cargo->getnombre().'</option>';
}

echo $rta;

