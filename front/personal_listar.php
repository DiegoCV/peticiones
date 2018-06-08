<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!--<link rel="shortcut icon" href="assets/images/favicon_1.ico">-->
  <link rel="shortcut icon" href="http://pescadero.com.co/_images/logoicon.png">

        <title>Moltran - Responsive Admin Dashboard Template</title>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <!-- Navigation Bar-->
       <?php include "header_Adm.php"; ?>  
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
           
<!--     <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="page-title">Datatable </h4>
                    </div>
                </div>-->

       

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                                 <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">
<!--                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Mostrar <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Todos las Solicitudes</a></li>
                                 <li class="divider"></li>
                                <li><a href="#">Solicitudes Pendientes</a></li>
                                <li><a href="#">Solicitudes Cerradas</a></li>
                                <li class="divider"></li>
                          
                            </ul>-->
                        </div>
                       <h3 class="panel-title">Personal</h3>
                    </div>
                </div>
                            </div>
                            <div class="panel-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th hidden="true">id oculto</th>
                                            <th style="width: 20.011px;">Id</th>
                                            <th style="width: 20.011px;">Nombre</th>
                                            <th style="width: 20.011px;">Cargo</th>
                                            <th style="width: 20.011px;">Correo</th>
                                            <th style="width: 20.011px;">modificar</th>
                                        </tr>
                                    </thead>


                                    <tbody id="usuarios" >
                                       
                                      
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->


       


     <div id="modal-solucion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Registrar Solucion</h4>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Address</label>
                                                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                                                        </div>
                                                    </div>
                                            
                                  <div class="col-md-12">
                                                        <div class="form-group no-margin">
                                                            <label for="field-7" class="control-label">Personal Info</label>
                                                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea>
                                                        </div>
                                                    </div>
                                            
                                            <div class="fileupload btn btn-purple waves-effect waves-light">
                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                    <input type="file" class="upload">
                                </div>
                                            <br>
                                            <br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->
           




    


   <?php include "footer.php"; ?>  
              
            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->



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
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>
        
        <script>
            $(document).ready(function () {
                $.ajax({
                    type: 'post',
                    url: '../controllers/UsuarioList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#usuarios').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });
                        });
        </script>


    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>