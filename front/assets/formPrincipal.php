<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

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
       <?php include "header.php"; ?>  
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
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Registro de Partes</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">   

                                                 <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo de Equipo</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Todo en Uno</option>
                                                        <option>Pc Escritorio</option>
                                                        <option>Portatil</option>
                                                        <option>Impresora</option>
                                                       
                                                    </select>
                                           
                                                </div>
                                            </div>
                                            
                                            
                                                 <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo de Periferico</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Pantalla</option>
                                                        <option>Mouse</option>
                                                        <option>Teclado</option>
                                                        <option>Impresora</option>
                                                        <option>Camara</option>
                                                    </select>
                                           
                                                </div>
                                            </div>
                                       
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Marca</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="Some text value...">
                                                </div>
                                            </div>
                                      
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Modelo</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Serial</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" readonly="readonly" value="Readonly value">
                                                </div>
                                            </div>    
                                
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Stiker Activo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" readonly="readonly" value="Readonly value">
                                                </div>
                                            </div>                                    
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fecha de compra</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" readonly="readonly" value="Readonly value">
                                                </div>
                                            </div>     
                                            
                                                                       
                                                                        
                                       <div class="form-group">                                    
                                <div class="col-sm-12" align="center">
                                    <button type="button" type="submit"  value="boton" name="btnMostrar" class="btn btn-info" >Registrar</button>
                                </div>
                            </div>       
                                     
                                            
                                        
                                         

                                       
                           
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

       



           




    


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


    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>