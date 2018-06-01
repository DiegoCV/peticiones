/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\
/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mínimos requeridos
 */
function validarForm(idForm){
	var form=$('#'+idForm)[0];
	for (var i = 0; i < form.length; i++) {
		var input = form[i];
		if(input.required && input.value==""){
			return false;
		}
	}
	return true;
}

////////// ANTIVIRUS \\\\\\\\\\
function preAntivirusInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/antivirus/AntivirusInsert.php',postAntivirusInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postAntivirusInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Antivirus registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preAntivirusList(container){
     //Solicite información del servidor
     cargaContenido(container,'AntivirusList.html'); 
 	enviar("",'../back/outerController/antivirus/AntivirusList.php',postAntivirusList); 
}

 function postAntivirusList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("AntivirusList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CALIDAD \\\\\\\\\\
function preCalidadInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/calidad/CalidadInsert.php',postCalidadInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCalidadInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Calidad registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCalidadList(container){
     //Solicite información del servidor
     cargaContenido(container,'CalidadList.html'); 
 	enviar("",'../back/outerController/calidad/CalidadList.php',postCalidadList); 
}

 function postCalidadList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CalidadList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CARGO \\\\\\\\\\
function preCargoInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cargo/CargoInsert.php',postCargoInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCargoInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Cargo registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCargoList(container){
     //Solicite información del servidor
     cargaContenido(container,'CargoList.html'); 
 	enviar("",'../back/outerController/cargo/CargoList.php',postCargoList); 
}

 function postCargoList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CargoList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CLAVES \\\\\\\\\\
function preClavesInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/claves/ClavesInsert.php',postClavesInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postClavesInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Claves registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preClavesList(container){
     //Solicite información del servidor
     cargaContenido(container,'ClavesList.html'); 
 	enviar("",'../back/outerController/claves/ClavesList.php',postClavesList); 
}

 function postClavesList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("ClavesList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CPU \\\\\\\\\\
function preCpuInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cpu/CpuInsert.php',postCpuInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCpuInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Cpu registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCpuList(container){
     //Solicite información del servidor
     cargaContenido(container,'CpuList.html'); 
 	enviar("",'../back/outerController/cpu/CpuList.php',postCpuList); 
}

 function postCpuList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CpuList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// DEPARTAMENTOS \\\\\\\\\\
function preDepartamentosInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/departamentos/DepartamentosInsert.php',postDepartamentosInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postDepartamentosInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Departamentos registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preDepartamentosList(container){
     //Solicite información del servidor
     cargaContenido(container,'DepartamentosList.html'); 
 	enviar("",'../back/outerController/departamentos/DepartamentosList.php',postDepartamentosList); 
}

 function postDepartamentosList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("DepartamentosList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// IMPRESORA \\\\\\\\\\
function preImpresoraInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/impresora/ImpresoraInsert.php',postImpresoraInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postImpresoraInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Impresora registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preImpresoraList(container){
     //Solicite información del servidor
     cargaContenido(container,'ImpresoraList.html'); 
 	enviar("",'../back/outerController/impresora/ImpresoraList.php',postImpresoraList); 
}

 function postImpresoraList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("ImpresoraList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// MONITOR \\\\\\\\\\
function preMonitorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/monitor/MonitorInsert.php',postMonitorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postMonitorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Monitor registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preMonitorList(container){
     //Solicite información del servidor
     cargaContenido(container,'MonitorList.html'); 
 	enviar("",'../back/outerController/monitor/MonitorList.php',postMonitorList); 
}

 function postMonitorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("MonitorList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// MOUSE \\\\\\\\\\
function preMouseInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/mouse/MouseInsert.php',postMouseInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postMouseInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Mouse registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preMouseList(container){
     //Solicite información del servidor
     cargaContenido(container,'MouseList.html'); 
 	enviar("",'../back/outerController/mouse/MouseList.php',postMouseList); 
}

 function postMouseList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("MouseList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// PETICIONES_ANALISIS \\\\\\\\\\
function prePeticiones_analisisInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/peticiones_analisis/Peticiones_analisisInsert.php',postPeticiones_analisisInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postPeticiones_analisisInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Peticiones_analisis registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function prePeticiones_analisisList(container){
     //Solicite información del servidor
     cargaContenido(container,'Peticiones_analisisList.html'); 
 	enviar("",'../back/outerController/peticiones_analisis/Peticiones_analisisList.php',postPeticiones_analisisList); 
}

 function postPeticiones_analisisList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("Peticiones_analisisList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// PETICIONES_SOPORTE \\\\\\\\\\
function prePeticiones_soporteInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/peticiones_soporte/Peticiones_soporteInsert.php',postPeticiones_soporteInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postPeticiones_soporteInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Peticiones_soporte registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function prePeticiones_soporteList(container){
     //Solicite información del servidor
     cargaContenido(container,'Peticiones_soporteList.html'); 
 	enviar("",'../back/outerController/peticiones_soporte/Peticiones_soporteList.php',postPeticiones_soporteList); 
}

 function postPeticiones_soporteList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("Peticiones_soporteList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// RED \\\\\\\\\\
function preRedInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/red/RedInsert.php',postRedInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postRedInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Red registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preRedList(container){
     //Solicite información del servidor
     cargaContenido(container,'RedList.html'); 
 	enviar("",'../back/outerController/red/RedList.php',postRedList); 
}

 function postRedList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("RedList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// SESION \\\\\\\\\\
function preSesionInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/sesion/SesionInsert.php',postSesionInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postSesionInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Sesion registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preSesionList(container){
     //Solicite información del servidor
     cargaContenido(container,'SesionList.html'); 
 	enviar("",'../back/outerController/sesion/SesionList.php',postSesionList); 
}

 function postSesionList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("SesionList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// SOFTWARE \\\\\\\\\\
function preSoftwareInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/software/SoftwareInsert.php',postSoftwareInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postSoftwareInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Software registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preSoftwareList(container){
     //Solicite información del servidor
     cargaContenido(container,'SoftwareList.html'); 
 	enviar("",'../back/outerController/software/SoftwareList.php',postSoftwareList); 
}

 function postSoftwareList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("SoftwareList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// TECLADO \\\\\\\\\\
function preTecladoInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/teclado/TecladoInsert.php',postTecladoInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postTecladoInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Teclado registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preTecladoList(container){
     //Solicite información del servidor
     cargaContenido(container,'TecladoList.html'); 
 	enviar("",'../back/outerController/teclado/TecladoList.php',postTecladoList); 
}

 function postTecladoList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("TecladoList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// USUARIO \\\\\\\\\\
function preUsuarioInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/usuario/UsuarioInsert.php',postUsuarioInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postUsuarioInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Usuario registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preUsuarioList(container){
     //Solicite información del servidor
     cargaContenido(container,'UsuarioList.html'); 
 	enviar("",'../back/outerController/usuario/UsuarioList.php',postUsuarioList); 
}

 function postUsuarioList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("UsuarioList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

//That´s all folks!