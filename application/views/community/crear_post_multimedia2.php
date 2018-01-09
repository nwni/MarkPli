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
            <br>
            <br>
              <label for="titulo">Contenido:</label><input type="text" class="form-control" name="descripcion" placeholder="Describe brevemente el proposito de este post">
            </div>
            <div class="form-group">
              <label for="contenido" style="display:none">Contenido:</label><textarea style="display:none" name="contenido" id="desc" cols="48" rows="3" class="form-control" placeholder="arma tu publicacion"></textarea>
            </div>

            <div class="form-group">
              <label for="tags">Etiquetas:</label><input class="form-control" type="text" placeholder="#ejemplo #otro" name="hashtags">
            </div>
            <br>
            <div class="form-group">
            <label for="tags">Tipo de Publicación</label>
            <select name="txtTipoPublicacion" id="tipoPublicacion" class="form-control">
                <option label="--- Menu ---"></label>
                <option label="Platillos ---"></label>
                <option value="1">Cortes</option>
                <option value="1">Ensaldas</option>
                <option value="1">Infantil</option>
                <option label="Bebidas ---"></label>
                <option value="1">Con Alcohol</option>
                <option value="1">Sin Alcohol</option>
                <option value="1">Postres</option>
                <option value="1">Recomendaciones</option>
                <option label="--- Social Media Engagement ---"></label>
                <option value="2">Promociones Exclusivas</option>
                <option value="2">Encuestas</option>
                <option value="2">Reseñas</option>
                <option label="--- Consejos ---"></label>
                <option value="3">Recetas</option>
                <option value="3">Salud</option>
                <option label="--- Días Festivos ---"></label>
                <option value="4">Sucesos Importantes</option>
                <option value="4">Menciones Honorificas</option>
                <option label="--- Trabajadores ---"></label>
                <option value="5">Behind the Scenes</option>
                <option value="5">Interacción con el Staff</option>
            </select>
        </div
                <div class="form-group">
              <label for="tags">Tipo:</label>
            <select class="form-control" required="" name="tipo">
              <option value="photo">Imagen</option>
                <option value="video">Video</option>
          
         </select>

            
   


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
