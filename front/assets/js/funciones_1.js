//metodo carga una imagen cargando
function loading(rta) {
    $(rta).html("<div class='row'><div class='col-md-6 col-md-offset-5'><img src='../imagen/cargando.gif' width='32' height='32' alt='cargando' /></div>");
}

//metodo para creacion de objecto ajax
function ajax(url, datos, rta) {
    var ajax = $.get(url, datos, function (respuesta) {
             $(rta).html(respuesta);
    });
    return ajax;
}

 //<editor-fold defaultstate="collapsed" desc="Formularios de Anteproyecto">

function MostrarAnteproyecto_registrar()//formulario de General de egresado
{
    
    var url = "Anteproyecto_registrar.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}


function MostrarAnteproyecto_proceso()//formulario de General de egresado
{
    var url = "Anteproyecto_proceso.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}


function MostrarAnteproyecto_correcciones()//formulario de General de egresado
{
    var url = "Anteproyecto_correciones.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function MostrarAnteproyecto_listar()//formulario de actualizacion de egresado
{
    var url = "Anteproyecto_listar.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

//</editor-fold>


//<editor-fold defaultstate="collapsed" desc="Formularios de Tesis">





//</editor-fold>



//<editor-fold defaultstate="collapsed" desc="Formularios de Administrador">

function MostrarPersona_registrar()//formulario de General de egresado
{
    var url = "Persona_registrar.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
function MostrarPersona_buscar()//formulario de actualizacion de egresado
{
    var url = "Persona_buscar.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}


//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Formularios de Tesis">

function MostrarTesis_listar()//formulario de actualizacion de egresado
{
    var url = "Tesis_listar.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}


//</editor-fold>


function MostrarFormacionCompl() {
    var url = "formDatosFcontinua.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function MostrarFormacionComplE() {
    var url = "formDatosFcontinua_Egresado.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function MostrarEstudios() {
    var url = "formDatosEstudios.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}


function MostrarExperiencia(){
    var url = "formDatosExperiencia.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function MostrarActualizarEgresado()//formulario de actualizacion de egresado
{
    var url = "actualizarEgresado.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}


function MostrarSubirArchivo()//formulario para subir  archivo con todos los egresados
{
    var url = "formSubirArchivo.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
function MostrarModal()//formulario para subir  archivo con todos los egresados
{
    var url = "modal.jsp";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}



function enviarMail()
{
    var dv = $("#dv").val();
    var email = $("#email").val();
    if ($("#email").val().length > 1) {
        if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
            document.getElementById("datos").innerHTML = "";
            jQuery("#datos").load('correoi.php');
        }
        else {
            var url = "enviarMail.php?dv=" + dv + "&email=" + email + "&phpmailer=phpmailer";
            document.getElementById("datos").innerHTML = "";
            jQuery("#datos").load('load.php');
            document.getElementById("datos").innerHTML = "";
            jQuery("#datos").load(url);
        }
    }
    else
    {
        document.getElementById("datos").innerHTML = "";
        jQuery("#datos").load('correov.php');
    }
}

function habilitarMail()
{
    $("#email").attr('disabled', false);
    $("#enviar").attr('disabled', false);
}

function mostrar()
{
    var file = $("#file").val();
    console.log(file);
}

//funciones de prueba
/**
 * Metodo para Ocultar o mostrar Divs
 * @param {type} tipo
 * @returns {undefined}
 */
function mostrarDivs(tipo) {
    if (tipo === 1) {
        document.getElementById("instalacion").value = "1";
        document.getElementById("residencial").style.display = "block";
        document.getElementById("res").style.display = "block";
        document.getElementById("comer").style.display = "none";
        document.getElementById("adicional").style.display = "block";
        document.getElementById("comercial").style.display = "none";
        document.getElementById("industrial").style.display = "none";
        document.getElementById("dis").style.display = "none";
        document.getElementById("trans").style.display = "none";
        document.getElementById("espe").style.display = "none";
    } else if (tipo === 2) {
        document.getElementById("instalacion").value = "2";
        document.getElementById("residencial").style.display = "block";
        document.getElementById("comer").style.display = "block";
        document.getElementById("res").style.display = "none";
        document.getElementById("adicional").style.display = "block";
        document.getElementById("industrial").style.display = "none";
        document.getElementById("dis").style.display = "none";
        document.getElementById("trans").style.display = "none";
        document.getElementById("espe").style.display = "none";
    } else if (tipo === 3) {
        document.getElementById("instalacion").value = "3";
        document.getElementById("residencial").style.display = "none";
        document.getElementById("res").style.display = "none";
        document.getElementById("comer").style.display = "none";
        document.getElementById("industrial").style.display = "block";
        document.getElementById("adicional").style.display = "block";
        document.getElementById("dis").style.display = "none";
        document.getElementById("trans").style.display = "none";
        document.getElementById("espe").style.display = "none";
    } else if (tipo === 4) {
        document.getElementById("instalacion").value = "4";
        document.getElementById("residencial").style.display = "none";
        document.getElementById("res").style.display = "none";
        document.getElementById("comer").style.display = "none";
        document.getElementById("adicional").style.display = "none";
        document.getElementById("industrial").style.display = "none";
        document.getElementById("dis").style.display = "block";
        document.getElementById("trans").style.display = "none";
        document.getElementById("espe").style.display = "none";
    } else if (tipo === 5) {
        document.getElementById("instalacion").value = "5";
        document.getElementById("residencial").style.display = "none";
        document.getElementById("res").style.display = "none";
        document.getElementById("comer").style.display = "none";
        document.getElementById("adicional").style.display = "none";
        document.getElementById("industrial").style.display = "none";
        document.getElementById("dis").style.display = "none";
        document.getElementById("trans").style.display = "block";
        document.getElementById("espe").style.display = "none";
    } else if (tipo === 6) {
        document.getElementById("instalacion").value = "6";
        document.getElementById("residencial").style.display = "none";
        document.getElementById("res").style.display = "none";
        document.getElementById("comer").style.display = "none";
        document.getElementById("industrial").style.display = "none";
        document.getElementById("adicional").style.display = "none";
        document.getElementById("dis").style.display = "none";
        document.getElementById("trans").style.display = "none";
        document.getElementById("espe").style.display = "block";
    }
}

function validarCheck(id) {
    if (document.getElementById(id).checked) {
        document.getElementById(id).value = "1";
    } else {
        document.getElementById(id).value = "0";
    }
}

function validarOption(id) {
    var selectOrigen = document.getElementById(id);

    // Obtengo la opcion que el usuario selecciono
    var opcionSeleccionada = selectOrigen.options[selectOrigen.selectedIndex].value;

    // Si el usuario eligio la opcion "Elige", no voy al servidor y pongo los selects siguientes en estado "Selecciona opcion..."
    if (opcionSeleccionada === "0")
    {
        document.getElementById(id).style.borderColor = "#f56954";
        alert("Opción no valida, por favor elija nuevamente");

    } else {
        document.getElementById(id).style.borderColor = "#00a65a";
    }
}



function validartipo() {
    var tipo = $("#instalacion").val();
    if (tipo === 0 || tipo === null) {
        alert("NO HA SELECCIONADO TIPO DE INSTALACIÓN");
    }
}

function registrarCotRetie() {
    document.getElementById("cotizacion").submit(function (e) {
        var data = new FormData(this); //Creamos los datos a enviar con el formulario
        $.ajax({
            url: './php/validarRegistroCotizacion.php', //URL destino
            data: data,
            processData: false, //Evitamos que JQuery procese los datos, daría error
            contentType: false, //No especificamos ningún tipo de dato
            type: 'POST',
            success: function (data) {
                alert(data);
            }
        });

        e.preventDefault();
        document.getElementById("cotizacion").each(function () {
            this.reset();
        });//Evitamos que se mande del formulario de forma convencional
    });
}

// metodo solo permite numero
function validarNumeros(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla === 8)
        return true; // backspace
    if (tecla === 109)
        return true; // menos
    if (tecla === 110)
        return true; // punto
    if (tecla === 189)
        return true; // guion
    if (e.ctrlKey && tecla === 86) {
        return true
    }
    ; //Ctrl v
    if (e.ctrlKey && tecla === 67) {
        return true
    }
    ; //Ctrl c
    if (e.ctrlKey && tecla === 88) {
        return true
    }
    ; //Ctrl x
    if (tecla >= 96 && tecla <= 105) {
        return true
    } //numpad

    patron = /[0-9]/; // patron

    te = String.fromCharCode(tecla);
    return patron.test(te); // prueba
}

function validarCheckAdc(id, in1, in2, num, id2, in3, in4) {

    if (document.getElementById(id).checked && document.getElementById(id2).checked) {
        document.getElementById("instalacion_adc").value = "11";
        document.getElementById(in1).disabled = false;
        document.getElementById(in2).disabled = false;
        document.getElementById(in3).disabled = false;
        document.getElementById(in4).disabled = false;
    } else if (document.getElementById(id).checked) {
        document.getElementById("instalacion_adc").value = num;
        document.getElementById(in1).disabled = false;
        document.getElementById(in2).disabled = false;
        document.getElementById(in3).disabled = true;
        document.getElementById(in4).disabled = true;
    } else if (!document.getElementById(id).checked && document.getElementById(id2).checked) {
        if (id2 === "dis_adc") {
            document.getElementById("instalacion_adc").value = "9";
        } else {
            document.getElementById("instalacion_adc").value = "10";
        }
        document.getElementById(in1).disabled = true;
        document.getElementById(in2).disabled = true;
        document.getElementById(in3).disabled = false;
        document.getElementById(in4).disabled = false;
    }
    else {
        document.getElementById("instalacion_adc").value = "0";
        document.getElementById(in1).disabled = true;
        document.getElementById(in2).disabled = true;
        document.getElementById(in3).disabled = true;
        document.getElementById(in4).disabled = true;
    }

}

function validarMime() {
    var input = document.getElementById('plano').value.lastIndexOf(".pdf")
    if (input == -1)
    {
        alert('Solo se admite archivos .pdf ');
        return false;
    }
}
