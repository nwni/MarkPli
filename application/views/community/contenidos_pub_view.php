  <div class="container" align="center">
    <h1>Crear Publicaion</h1>

   
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
            <img src="<?php echo $contenido['link_img']?>" " width="150" height="150" >

        <?php  }?>
          </td>
           <td>
          <?php echo "<a href=".base_url()."CverContenido/ver/".$contenido['id_contenido'].">Ver | </a>"?>
            <a class="btn btn-primary btn-md" href="/marketingp/contenidos/crear/<?php echo $contenido['id_contenido']?>">Crear Post</a>



          
        </td>
    
      
        </tr>
      <?php endforeach; ?>
   <?php }?>
    </table>

       
</div>
