

<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Soporte Equipos</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

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
        
        <header id="topnav">

 <?php 

   echo include "header_Adm.php";
 
// echo "imr ".$cargo;
 

?>  
</header>

           <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                <h4 class="modal-title">Registrar Solicitud</h4>
                                            </div>
                                             <form id="Peticiones_soporteInsert" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                              
                                                      <div class="form-group">
                                                          <label for="Inputpeticion">peticion</label>
                                                          <input type="text" name="peticion" class="form-control" id="Inputpeticion" placeholder="peticion">
                                                       </div>
                                                      <div class="form-group">
                                                          
                                                          <input type="hidden" name="fecha_ini" class="form-control" id="Inputfecha_ini" placeholder="fecha_ini" value="<?php echo date("d") . "/" . date("m") . "/" . date("Y"); ?>">
                                                       </div>
                                                      <div class="form-group">
                                                         
                                                          <input type="hidden" name="fecha_fin" class="form-control" id="Inputfecha_fin" placeholder="fecha_fin" value="00/00/0000">
                                                       </div>
                                                      <div class="form-group">
                                                        
                                                          <input type="hidden" name="solucion" class="form-control" id="Inputsolucion" placeholder="solucion" value="Sin solucion">
                                                       </div>
                                                      <div class="form-group">
                                                       
                                                          <input type="hidden" name="estado" class="form-control" id="Inputestado" placeholder="estado" value="cero">
                                                       </div>
                                                      <div class="form-group">
                                                         
                                                          <input type="hidden" name="usuario_id" class="form-control" id="Inputusuario_id" placeholder="usuario_id" value="<?php echo $usuario?>">
                                                       </div>                                                                      
                                                      
                                                    </div>                                                  
                                                </div>
                                            </div>                                            
                                            <div class="fileupload btn btn-purple waves-effect waves-light">
                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                    <input type="file" name="imagen" class="upload">
                                    
                                </div>
                                            <br>
                                            <br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit"  class="btn btn-info waves-effect waves-light" onclick="prePeticiones_soporteInsert('Peticiones_soporteInsert')">Registrar Solicitud</button>
                                            </div>
                                            </form>
                                        </div>                                    
                                    </div>
                                </div><!-- /.modal -->

                                
          <div id="modal-mantenimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Registrar Mantenimiento</h4>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Equipo</label>
                                                               <select required class="form-control" id="field-3">
                                                        <option value="">Seleccione</option>
                                                        <option value="1">Comercial</option>
                                                        <option value="2">Servidor</option>
                                                        <option value="3">Despachos</option>
                                                      
                                                    </select>
                                                        </div>
                                                    </div>
                                     
                                                 <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">fecha</label>
                                                            <input type="date" class="form-control" id="field-3" placeholder="Address">
                                                        </div>
                                                    </div>
                                            
                                            
                                   <div class="col-md-12">
                                                        <div class="form-group no-margin">
                                                            <label for="field-7" class="control-label">Observacion</label>
                                                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea>
                                                        </div>
                                                    </div>
                              
                                            <hr>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->



 
        <div class="wrapper">
            <div class="container">


         <div id="mostrarcontenido"  class="col-lg-12">

        

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                                 <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">
                          
                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Mostrar <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Todos las Solicitudes</a></li>
                                 <li class="divider"></li>
                                <li><a href="#">Solicitudes Pendientes</a></li>
                                <li><a href="#">Solicitudes Cerradas</a></li>
                                <li class="divider"></li>
                          
                            </ul>
                        </div>
                       <h3 class="panel-title">Solicitudes Pendientes</h3>
                    </div>
                </div>
                            </div>
                            
              <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
<!--                            <div class="panel-heading">
                                <h3 class="panel-title">Buttons example</h3>
                            </div>-->
                            <div class="panel-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="display:none;">id</th>
                                            <th>id</th>
                                            <th>peticion</th>
                                            <th>fecha_ini</th>
                                            <th>fecha_fin</th>
                                            <th>solucion</th>
                                            <th>estado</th>
                                            <th>idUsuario</th>                                       
                                        </tr>
                                    </thead>

                                     <tbody id="Peticiones_soporteList" >
   
       
                                    
                                      
                                    </tbody>
                                    
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->                 
                            
                            
                            
                            
                            
                      
                        </div>
                    </div>

                </div> 


         </div>
                
           <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                <h4 class="modal-title">Registrar Solicitud</h4>
                                            </div>
                                            <form id="Peticiones_soporteInsert" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                              
                                                      <div class="form-group">
                                                          <label for="Inputpeticion">peticion</label>
                                                          <input type="text" name="peticion" class="form-control" id="Inputpeticion" placeholder="peticion">
                                                       </div>
                                                      <div class="form-group">
                                                          
                                                          <input type="hidden" name="fecha_ini" class="form-control" id="Inputfecha_ini" placeholder="fecha_ini" value="<?php echo date("d") . "/" . date("m") . "/" . date("Y"); ?>">
                                                       </div>
                                                      <div class="form-group">
                                                         
                                                          <input type="hidden" name="fecha_fin" class="form-control" id="Inputfecha_fin" placeholder="fecha_fin" value="00/00/0000">
                                                       </div>
                                                      <div class="form-group">
                                                        
                                                          <input type="hidden" name="solucion" class="form-control" id="Inputsolucion" placeholder="solucion" value="Sin solucion">
                                                       </div>
                                                      <div class="form-group">
                                                       
                                                          <input type="hidden" name="estado" class="form-control" id="Inputestado" placeholder="estado" value="cero">
                                                       </div>
                                                      <div class="form-group">
                                                         
                                                          <input type="hidden" name="usuario_id" class="form-control" id="Inputusuario_id" placeholder="usuario_id" value="<?php echo $usuario?>">
                                                       </div>                                                                      
                                                                                  
                                   

                                                    </div>                                                  
                                                </div>
                                            </div>                                            
                                            <div class="fileupload btn btn-purple waves-effect waves-light">
                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                    <input type="file" name="imagen" class="upload">
                                    
                                </div>
                                            <br>
                                            <br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit"  class="btn btn-info waves-effect waves-light" onclick="prePeticiones_soporteInsert('Peticiones_soporteInsert')">Registrar Solicitud</button>
                                            </div>
                                            </form>
                                        </div>                                    
                                    </div>
                                </div><!-- /.modal -->



   <?php include "footer.php"; ?>  
              
            </div>
            <!-- end container -->

        </div>
        
        
        <!-- end Modal -->

 


                  <!--<script type="text/javascript" src="assets/js/tipo_pantalla.js"></script>--> 
        <script type="text/javascript" src="assets/js/funciones.js"></script> 

        
    
             <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <script src="assets/js/jquery.app.js"></script>
 

<script type="text/javascript">
          /** $(document).ready(function(){
               
               if($('#ocultar_id').val()=='2'||$('#ocultar_id').val()=='3'||$('#ocultar_id').val()=='29'){
                        
                       var codID = $('#codID').val();
                $.post("../controllers/ProblemaList_1.php",
                    {
                        cod: codID
                      
                    },
                    function(data, status){
                         $('#pro').html(data);
                    });
               }
  
               
        else{
                var codID = $('#ocultar_id').val();
                $.post("../controllers/problemas_list.php",
                 
                    {
                        cod: codID
                       
                    },
                   
                    function(data, status){
                         $('#pro').html(data);
                    });
               }
               
        });    */
       </script> 
       <script type="text/javascript">
          $(document).ready(function(){  
            $.post( "../back/outerController/peticiones_soporte/peticionesListUsuario.php").done(function(data){
              $('#Peticiones_soporteList').html(data);
            });             
          });             
          


       </script> 
       
       
           <script>
             
  function pantallaOnChange(sel) {
    
      if (sel.value=="1"){

 divT = document.getElementById("nPantalla");
           divT.style.display = "";
       
      }
      
        else{
    divT = document.getElementById("nPantalla");
           divT.style.display = "none";

      }
}
    </script>

  
     
        
<!--                     
                  $.ajax({
            url: './php/Login.php', //URL destino
            data: data,
            processData: false, //Evitamos que JQuery procese los datos, daría error
            contentType: false, //No especificamos ningún tipo de dato
            type: 'POST',
            success: function (data) {
                $('#resultlogin').html(data);
            }
        })-->

    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>
