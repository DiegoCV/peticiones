 <?php
session_start();
if (!isset($_SESSION['id_usuario']) || $_SESSION['id_usuario'] == null || $_SESSION['id_usuario'] == "") {
    echo'<script type="text/javascript">
                alert("Inicio de Sesion Requerido");
                window.location="login.php"
                </script>';
}
//session_destroy();
$usuario = $_SESSION['id_usuario'];
$cargo = $_SESSION['cargo_id'];
$nombre = $_SESSION['nombre_usuario'];


//   window.location="login.php"

?>


   <script src="assets/js/jquery.min.js"></script>

            <div class="topbar-main">
                 <div class="container">

                    <!-- LOGO -->
                      <div class="topbar-left">

                        
                        <a href="formPrincipal.php" class="logo" alt="Pescadero" title="Pescadero" > <img src="assets/images/logo2.png" alt="Pescadero" title="Pescadero " width='25' height='25'><span>   Pescadero </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form class="navbar-left app-search pull-left hidden-xs">
                                     <label style="color: white" ><?php echo $nombre ?></label>
                                     <input type="hidden" id="ocultar_id" value="<?php echo $cargo ?>" />
                                  
                                </form>
                            </li>
                       

                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                 
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                 
                                  <li><a href="../back/outerController/usuario/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                                 <li>
                                     <a href="home.php" ><i class="md md-terrain "></i><span>  Inicio  </span> </a>

                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Registrar  </span> </a>
                                <ul class="submenu">
                                    <li><a style="cursor: pointer  " data-toggle="modal" data-target="#con-close-modal">Registrar Solicitud</a></li>
                                    <li id="ocultar_0" style="display: none" ><a style="cursor: pointer  " data-toggle="modal" data-target="#modal-mantenimiento">Registrar Mantenimiento</a></li>
                                  
                                   
                                </ul>
                            </li>
                            
                            
                          
                                
                            <li  id="ocultar" style="display: none" class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Equipos  </span> </a>
                                <ul class="submenu">
                                    <li><a onclick="FormRegistrarPeriferico();">Registrar Periferico</a></li>
                                    <li><a onclick="FormRegistrarEquipo();">Registrar Equipo</a></li>
                                    <li><a onclick="periferico_listar();">Listar Periferico</a></li>
                                    <li><a onclick="equipo_listar();">Listar Equipo</a></li>
                                    <li><a onclick="FormRegistrarCalendario();">Calendario Mantenimientos</a></li>
<!--                                    <li><a href="periferico_listar.php">Listar Periferico</a></li>
                                    <li><a href="equipo_listar.php">Listar Equipo</a></li>-->
                                   
                                </ul>
                            </li>

                            <li id="ocultar_1" style="display: none"  class="has-submenu">
                                <a onclick="ListarPersonal();"><i class="md md-terrain "></i><span> Personal </span> </a>

                            </li>

                         
                             <li id="ocultar_2" style="display: none"  >
                                 <a onclick="calidad_Listar();" ><i class="md md-terrain "></i><span>  Calidad  </span> </a>

                            </li>

                           
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                    
             

                </div>
            </div>
    



                                
<script>
$(document).ready(function(){
//       alert($('#ocultar_id').val());
       
      
       
    if($('#ocultar_id').val()=='2'){
      
        document.getElementById('ocultar').style.display= "none"; // oculta equipos
        document.getElementById('ocultar_0').style.display= "none"; //oculta registrar mantenimiento
        document.getElementById('ocultar_1').style.display= ""; //oculta registrar personal
        document.getElementById('ocultar_2').style.display= ""; //oculta registrar calidad
    }
    if($('#ocultar_id').val()=='3'){
      
        document.getElementById('ocultar').style.display= ""; // oculta equipos
        document.getElementById('ocultar_0').style.display= ""; //oculta registrar mantenimiento
        document.getElementById('ocultar_1').style.display= "none"; //oculta registrar personal
        document.getElementById('ocultar_2').style.display= "none"; //oculta registrar calidad
    }
    if($('#ocultar_id').val()=='29'){
      
     
        
            document.getElementById('ocultar').style.display= ""; // oculta equipos
        document.getElementById('ocultar_0').style.display= ""; //oculta registrar mantenimiento
        document.getElementById('ocultar_1').style.display= ""; //oculta registrar personal
        document.getElementById('ocultar_2').style.display= ""; //oculta registrar calidad
    }
//    else{
//      
//        document.getElementById('ocultar').style.display= "none"; 
//        document.getElementById('ocultar_0').style.display= "none"; 
//        document.getElementById('ocultar_1').style.display= "none"; 
//        document.getElementById('ocultar_2').style.display= "none"; 
//    }
  
});
</script>

  <script type="text/javascript" src="assets/js/funciones.js"></script> 
