<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\
include_once realpath('../../innerController/DepartamentosController.php');

$list=DepartamentosController::listAll();
$rta="";
foreach ($list as $obj => $Departamentos) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Departamentos->getid()."</td>\n";
	$rta.="<td>".$Departamentos->getnombre()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!