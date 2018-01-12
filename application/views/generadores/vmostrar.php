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
	          <th>Acciones</th>
	        
	      
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

	   	  
			 
			<div class="dropdown">
					<button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					</button>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<form method="post" name="form" id="form">
							<?php echo "<a class='btn btn-success btn-sm' href=".base_url()."CverContenido/ver/".$row->id_contenido.">Ver  </a>"?>
							</form>
						</li>
						<div class="dropdown-divider"></div>
						<li class="dropdown-item">
						<?php echo "<a class='btn btn-danger btn-sm' href=".base_url()."CEliminarContenido/eliminar/".$row->id_contenido.">Eliminar</a>"?>
						</li>
					</ul>
			</div>
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