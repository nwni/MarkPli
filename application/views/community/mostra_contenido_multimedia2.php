  <div class="container" align="center">

    <h1>Agendar Publicación Multimedia</h1>

    <table class="table table-bordered" align="center">
      <thead>
          <tr>
            <th>Nombre del contenido</th>
            <th>Nombre de la campaña</th>
            <th>Contenido Multimedia</th>
            <th>Accion</th>
          
        
          </tr>
        </thead>
      
      <?php 
    if(isset($contenidos))  { ?>

        <?php foreach ($contenidos as $contenido) : ?>
                 
        <tr>
            <td>
          <?php echo $contenido['nombre_contenido'] ?>
          </td>
          <td>

            <?php echo $contenido['nombre_campana'] ?>

          </td>

            <td>
           <?php 
        if ($contenido['tipo']=="video") {?>
          <video controls src="<?php echo $contenido['link_img'] ?>" " width="150" height="150" autoplay ></video>
        <?php }else{ ?>
            <img src="<?php echo $contenido['link_img'] ?>" " width="150" height="150" >

        <?php  }?>

      

          </td>
           <td>
          
            
            <div class="dropdown">
				<div class="btn-group">
					<button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					</button>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
              <?php echo "<a class='btn btn-success btn-sm' href=".base_url()."CverContenido/ver/".$contenido['id_contenido'].">Ver</a>"?>
							</form>
						</li>
						<div class="dropdown-divider"></div>
						<li class="dropdown-item">
            <a class="btn btn-warning btn-sm" href="/marketingp/contenidos/crearPostMultimdia2/<?php echo $contenido['id_contenido']?>">Crear</a>
            </li>
					</ul>
				</div>
			</div>


          
        </td>
    
      
        </tr>
      <?php endforeach; ?>
   <?php }?>
    </table>
</div>
