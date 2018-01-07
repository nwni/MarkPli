<!DOCTYPE html>
<html>
<head>
  <title></title>

  <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script> 

      <script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
      <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
     <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
</head>
<body>
  <div id="page-wrapper">

      <div class="container-fluid">

          <!-- Page Heading esto es lo que cambiara en las vistas-->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                  <div class="panel panel-danger">
                    <div class="panel-heading"  >
                      <h3 class="panel-title">Modificar Usuario</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-2 col-lg-2 " align="center"> </div>

                        <div class=" col-md-9 col-lg-9 ">
                          <?php foreach ($usuarios as $user){
                            
                            ?> 
                          <form method="post" action="<?php echo site_url('usuario/actualizarusu ');?>">
                                <td><input type="hidden" name="id" value="<?php echo $user->id_usuario;?>"></td>
                              <label for="Nombre"  class="col-xs-2 control-label">Usuario</label>
                             
                                <input type="text" required name="Nombre" class="form-control" value="<?php echo $user->nick_usuario;?>">
                              
                                <br>
                              <label for="Contra" class="col-x-2 control-label">Contraseña</label>
                             
                                <input type="text" required name="Contra"  class="form-control" value="<?php echo $user->contrasena_usuario;?>">
                                <br>
                              
                                                                      <select name="Tipo" class="form-control" required>
                                        <option value="">Seleccione un tipo</option>  
                                        <option value="Comunnity">Comunnity</option>  
                                        <option value="Administrador">Administrador</option>
                                        <option value="Uploader">Uploader</option>    
                                </select>
                                <br>

                              <input type="submit" value="Modificar" class="btn btn-danger" name="Modificar">
                              
                          </form>
                            <?php
                          }     
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper

</body>
</html>

