
<body>
 <div id="inicio" class="container">
  <br>
  <h2 align="center">Modificar Usuario</h2>
  <br>
    <div class "row" >
      <?php foreach ($usuarios as $user){
        
        ?> 
      <form method="post" action="<?php echo site_url('usuario/actualizarusu ');?>">

       
              <input type="hidden" name="id" value="<?php echo $user->id_usuario;?>">
              
        
               <div class="col-md-6">     
               <label for="Nombre"  class="col-xs-2 control-label">Usuario</label>
            
                <input type="text" required name="Nombre" class="form-control" value="<?php echo $user->nick_usuario;?>">
            </div>
              <div class="col-md-6"> 
            <label for="Contra" class="col-x-2 control-label">Contraseña</label>
            <input type="text" required name="Contra"  class="form-control" value="<?php echo $user->contrasena_usuario;?>">
              </div>

               <div class="col-md-6">
                  <label >Tipo de usuario:</label>
                    <select name="Tipo" class="form-control" required>
                    <option value="">Seleccione un tipo</option>  
                    <option value="Comunnity">Community</option>  
                    <option value="Administrador">Administrador</option>
                    <option value="Uploader">Uploader</option>    
            </select>
             </div>
            <br>
             <div class="col-md-6">
          <input type="submit" value="Modificar" class="btn btn-warning" name="Modificar">
           <br>
          
      </form>
        <?php
      }     
    ?>
  </div>
</div>
