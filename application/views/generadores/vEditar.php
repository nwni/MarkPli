<?php 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	
 		<link rel="stylesheet" 
 				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
 				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
 				crossorigin="anonymous">
 				
 </head>
 <body>
 
 <div class="container" align="center">
 	<h1>Editar contenido</h1>

 		<form class="form-horizontal"  enctype="multipart/form-data" method="POST"  action="<?php echo base_url();?>CModificarContenido/editarEnlace/">

 			  <div class="form-group">
 			    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre del contenido</label>
					<div class="col-lg-10">
 			  		<input type="text" class="form-control" name="txtnombre" placeholder="Ingrese el nombre del contenido" required="">
 				</div>
 				 </div>

 				 <div class="form-group">
 			    <label for="ejemplo_password_3" class="col-lg-2 control-label">Selecciona el contenido</label>
 			    <div class="col-lg-10">
 			      <input type="file"  name="userfile" class="form-control" id="ejemplo_password_3" 
 			             required="">
 			    </div>
 			  </div>


 				  <div class="form-group">
 				 	<label class="col-lg-2" for="nombre">Nombre de la campaña</label>
 				 	<div class="col-lg-10">
 				 		<select class="form-control" required="" name="txtnombrecampana">
 				 			<?php foreach ($result->result() as $row) : ?>

 				 	        
 				 	        <option value="<?php echo $row->id_campana; ?>" > <?php echo $row->nombre_campana; ?> </option>
 	
 				 	   		 <?php endforeach; ?>
 				
 				 </select>
 				 	</div>
 				 </div>
 			  
 			
 			


 			  <div class="form-group">
 			    <div class=" col-lg-12">
 			      <button type="submit" class="btn btn-default">Editar contenido</button>
 			    </div>
 			  </div>

 		

 		<br>
 		<br>
 	

 </div>



 <script src="https://code.jquery.com/jquery-3.2.1.js"
  				integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  				crossorigin="anonymous">
 </script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
		crossorigin="anonymous">
</script>

 
 </body>
 </html>