<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>
	 <div class="container" align="center">
	 	<br>
	 	<h2>Contenido Generado</h2>
	 	<br>
	<table class="table table-hover">
	    <thead>
	        <tr>
	          <th>Nombre del contenido</th>
	          <th>Contenido</th>
	          <th>Nombre de la campaña</th>
	          <th>Ver</th>
	          <th>Eliminar</th>
	        
	      
	        </tr>
	      </thead>
	    
	   	<?php 
		if(isset($consulta))  { ?>

	      <?php foreach ($consulta->result() as $row) : ?>
	      		     
	      <tr>
	      	  <td>
	          <?php echo $row->nombre_contenido; ?> <br/><br/>
	         

	        </td>

	        <td>
<?php 
     		if ($row->tipo=="video") {?>
     			<video controls src="<?php echo $row->link_img ?>" " width="150" height="150" autoplay ></video>
     		<?php }else{ ?>
     			  <img src="<?php echo $row->link_img ?>" " width="150" height="150" >

     		<?php  }?>

	        </td>

	        	<td>
	          <?php echo $row->fid_campana; ?> <br/><br/>
	         

	        </td>
	         <td>
 <form method="post" action="<?php echo site_url('CverContenido/ver/');?>">
    <input type="hidden" name="id" value="<?php echo $row->id_contenido ?>">

	<input type="submit" class="btn btn-danger" value="Eliminar"></input>   
</form>
          <?php echo "<a href=".base_url()."CverContenido/ver/".$row->id_contenido.">Ver  </a>"?>
          
          
        </td>
	   <td>
	   	
	   	  <?php echo "<a href=".base_url()."CEliminarContenido/eliminar/".$row->id_contenido.">Eliminar</a>"?>

	   </td>
	      

	    
	      </tr>
	    <?php endforeach; ?>
	 <?php }?>
	  </table>

</div>

			<script src="https://code.jquery.com/jquery-3.2.1.js"
	  				integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  				crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>