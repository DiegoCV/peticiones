<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="registrarPeriferico" class="form-horizontal" role="form" action="../controllers/PerifericoInsert.php" method="POST">   




                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tipo de Periferico</label>
                                        <div class="col-sm-10">
                                            <select  required id="tipo_periferico" name="tipo_periferico" class="form-control" onChange="pantallaOnChange(this)">
                                            </select>                                   
                                                                             <!--<select required class="form-control" onChange="pantallaOnChange(this)">-->


                                        </div>
                                    </div>


                                    <div id="nPantalla" style="display:none; ">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipo de Pantallas</label>
                                            <div class="col-sm-10">

                                                <select   id="tipo_pantalla_id" name="tipo_pantalla" class="form-control" >
                                                </select> 

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Pulgadas</label>
                                            <div class="col-md-10">
                                                <input id="pulgadas" name="pulgadas" type="text" class="form-control" required="">
                                            </div>
                                        </div>



                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Marca</label>
                                        <div class="col-md-10">
                                            <input id="marca" name="marca" type="text" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Modelo</label>
                                        <div class="col-md-10">
                                            <input id="modelo" name="modelo" type="text" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Serial</label>
                                        <div class="col-md-10">
                                            <input id="serial" name="serial" type="text" class="form-control" required="">
                                        </div>
                                    </div>    

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Stiker Activo</label>
                                        <div class="col-md-10">
                                            <input id="stiker_activo" name="stiker_activo" type="text" class="form-control" required="">
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Fecha de compra</label>
                                        <div class="col-md-10">
                                            <!--                                                    <div class="input-group">-->
                                            <input id="fecha_compra" name="fecha_compra" type="date" class="form-control" placeholder="mm/dd/yyyy" >

<!--                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>-->
                                            <!--</div>-->
                                        </div>
                                    </div>     




                                    <div class="form-group">                                    
                                        <div class="col-sm-12" align="center">
                                            <button type="button" type="submit"  value="boton" name="btnMostrar" class="btn btn-info" >Registrar</button>
                                        </div>
                                    </div>       







                                </form>
    </body>
</html>
