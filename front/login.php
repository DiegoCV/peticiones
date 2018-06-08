

<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:08:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="http://pescadero.com.co/_images/logoicon.png">

        <title>Soporte Equipos</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

         <script src="js/ajax.js"></script>
         <script src="js/ViewController.js"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>

 
        <div class="wrapper-page">
             
               <div align=center >
                
                     <h1 class="logo-name"><img src="assets/images/logo.png"> </h1>
                </div>
            <div class="panel panel-color panel-primary panel-pages">
              
              
                
                <div class="panel-body">
                    <form role="form" method="post" action="../back/outerController/usuario/Login.php">
                      <div class="form-group">
                          <label for="Inputnombre">nombre</label>
                          <select id="cargoId" name="cargoId">
                           </select> 
                       </div>
                      <div class="form-group">
                          <label for="Inputcontrasena">contrasena</label>
                          <input type="text" name="contrasena" class="form-control" id="Inputcontrasena" placeholder="contrasena" required>
                       </div>
                       <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input id="rememberMe" type="checkbox" >
                                <label for="rememberMe">Recordar</label>                                 
                            </div>
                        </div>
                          
                        <a href="javascript:cargaContenido('container','UsuarioInsert.html')">Crear una cuenta</a>
                        </br>
                        </br>
                        <button type="submit" class="btn btn-warning">Ingresar</button>
                       
                   </form>
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
        
         <script type="text/javascript" src="assets/js/index.js"></script> <!-- /.usu para-body -->
	
        <script type="text/javascript">
          $(document).ready(function(){  
            $.post( "../back/outerController/cargo/CargoList.php").done(function(data){
             $('#cargoId').html(data);
            });             
          });             
       </script> 
       
	</body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:08:33 GMT -->
</html>