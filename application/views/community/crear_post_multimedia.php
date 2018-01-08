<!DOCTYPE html>
<html>
<head>
	<script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script> 
	  	<script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
	  	<script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
	  	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	   <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
    </head>
<body>
<div class="row">
  
  
    <div class="col-xs-8">
      <div class="imagen">
        <br>
        <?php 
        if ($contenido['tipo']=="video") {?>
          <video controls src="<?php echo $contenido['link_img'] ?>" " width="700" height="400" autoplay ></video>
        <?php }else{ ?>
            <img src="<?php echo $contenido['link_img'] ?>" " width="700" height="400" >

        <?php  }?>

      </div>
    </div>

    <?php echo form_open('contenidos/crearPostMul/'.$contenido['id_contenido'].'/'.$contenido['fid_generador']); ?>
      <div class="col-xs-4">
        <div class="col-xs-12">
            <div class="form-group">
              <label for="titulo">Descripción:</label><input type="text" class="form-control" name="descripcion" placeholder="Describe brevemente el proposito de este post">
            </div>
            <div class="form-group">
              <label for="contenido">Contenido:</label><textarea name="contenido" id="desc" cols="48" rows="3" class="form-control" placeholder="arma tu publicacion"></textarea>
            </div>

            <div class="form-group">
              <label for="tags">Etiquetas:</label><input class="form-control" type="text" placeholder="separar,por,comas" name="hashtags">
            </div>
                <div class="form-group">
              <label for="tags">Tipo:</label>
            <select class="form-control" required="" name="tipo">
              <option value="photo">Imagen</option>
                <option value="video">Video</option>
          
         </select>
         <br>
         <div class="form-group">
                <label for="tags">Tipo de Publicación</label>
                <select name="txtTipoPublicacion" id="tipoPublicacion" class="form-control">
                    <option label="--- Menu ---"></label>
                    <option label="Platillos ---"></label>
                    <option value="Cortes">Cortes</option>
                    <option value="Ensaldas">Ensaldas</option>
                    <option value="Infantil">Infantil</option>
                    <option label="Bebidas ---"></label>
                    <option value="Con Alcohol">Con Alcohol</option>
                    <option value="Sin Alcohol">Sin Alcohol</option>
                    <option value="Postres">Postres</option>
                    <option value="Recomendaciones">Recomendaciones</option>
                    <option label="--- Social Media Engagement ---"></label>
                    <option value="Promociones Exclusivas">Promociones Exclusivas</option>
                    <option value="Encuestas">Encuestas</option>
                    <option value="Reseñas">Reseñas</option>
                    <option label="--- Consejos ---"></label>
                    <option value="Recetas">Recetas</option>
                    <option value="Salud">Salud</option>
                    <option label="--- Días Festivos ---"></label>
                    <option value="Sucesos Importantes">Sucesos Importantes</option>
                    <option value="Menciones Honorificas">Menciones Honorificas</option>
                    <option label="--- Trabajadores ---"></label>
                    <option value="Behind the Scenes">Behind the Scenes</option>
                    <option value="Interacción con el Staff">Interacción con el Staff</option>
                </select>
            </div
            
                <div class="form-group">
                    <label>Fecha para publicar</label>
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
       


         <input style="margin-top: 10px" type="submit" class="pull-right btn btn-success" value="Gurdar evento">
        
        </div>


         
      </div>



    </div>

  </form>
    <?php echo form_close() ?>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date(),
                format:'YYYY-MM-DD HH:mm:ss'
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date(),
                format:'YYYY-MM-DD HH:mm:ss'
            });
            
        });
    </script>
</div>
</body>
</html>