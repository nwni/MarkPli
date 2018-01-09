<!DOCTYPE html>
<html>
<head>
    <title>Crear un nuevo evento</title>
    <meta charset="utf-8">
    <head>
    <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script> 
        <script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
       <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
    </head>
</head>
<body>
<div class="container">
 
    <h1 class="text-center heading">Añadir un nuevo post al calendario</h1>

    <hr>
      <?php echo form_open('contenidos/crearEstado/'); ?>



 <div class="col-xs-6" align="text-center" align="center">
        <div class="col-xs-12">
            <div class="form-group">
              <label for="titulo">Contenido:</label><input type="text" class="form-control" name="descripcion" placeholder="Describe brevemente el proposito de este post">
            </div>
            <div class="form-group">
              <label for="contenido" style="display:none">Contenido:</label><textarea style="display:none" name="contenido" id="desc" cols="48" rows="3" class="form-control" placeholder="arma tu publicacion"></textarea>
            </div>

            <div class="form-group">
              <label for="tags">Etiquetas:</label><input class="form-control" type="text" placeholder="#ejemplo #otro" name="hashtags">
            </div>

             <div class="form-group">
              <label for="tags">Nombre de la campaña:</label>   
                  <select class="form-control" required="" name="txtnombrecampana">
                            <?php foreach ($result->result() as $row) : ?>

                            
                            <option value="<?php echo $row->id_campana; ?>" > <?php echo $row->nombre_campana; ?> </option>
    
                             <?php endforeach; ?>
                
                 </select>

            </div>

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
                    <label>Fecha para publicar</label>
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
            


          <div style="display: inline-flex;">

            <div style="" class="form-group">
              <button class="btn btn-success btn-lg ">Crear</button>

            </div>
          </div>

          

        </div>
    <?php echo form_close() ?>
    <!-- ARREGLAR ESTA PARTE -->
    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                  format:'YYYY-MM-DD HH:mm:ss',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                  format:'YYYY-MM-DD HH:mm:ss',
                minDate: new Date()
            });
            
        });
    </script>
</div>
</body>
</html>     