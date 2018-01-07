
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
    <?php echo form_open('contenidos/crearPost/'.$contenido['id_contenido'].'/'.$contenido['fid_generador']); ?>
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
          </div>
          <div style="display: inline-flex;">

            <div style="" class="form-group">
              <button class="btn btn-success btn-lg ">Subir</button>
            </div>
          </div>
        
        </div>


        
      </div>
    </div>
  </form>

</div>