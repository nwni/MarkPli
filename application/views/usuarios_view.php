<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

   <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading esto es lo que cambiara en las vistas-->
                <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">
                        <br>
                      <h2 align="center">Usuarios Registrados</h2>
                      <br>
                      </div>
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                        <?php foreach ($usuarios as $usu){

                        echo '<tr> <td>'.$usu->nick_usuario.'</td>
                        <td>'.$usu->contrasena_usuario.'</td>
                        <td>'.$usu->tipo_usuario_nombre.'</td>'?>
                        <td>
                        <div class="dropdown">
                        <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <form  action="<?php echo site_url('usuario/ModificarUsu/'.$usu->id_usuario);?>">
                                <input type="submit" class="btn btn-warning btn-sm" value="Modificar"></input>
                            </form>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-item">
                            <form method="post" action="<?php echo site_url('usuario/eliminarusuario');?>">
                                <input type="hidden" name="id" value="<?php echo $usu->id_usuario;?>">
                                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar"></input>   
                            </form>
                        </li>
                        </ul>
                        </div>
                        </td>
                        <?php '</tr>'; }?>
                      </table>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
</body>
</html>

     


