<?php 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	
 	<!-- 	<link rel="stylesheet" 
 				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
 				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
				 crossorigin="anonymous"> -->
				
				 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
				 
				 			 
 </head>
 <body>
 
 <div class="container" align="center">
 		<h1>Subir contenido</h1>

 	

 			<form class="form-horizontal"  enctype="multipart/form-data" method="POST"  action="<?php echo base_url(); ?>cupload/do_upload" >

 			  <div class="form-group">
 			    <label for="ejemplo_email_3" class="col-lg-4 control-label">Nombre del contenido</label>
					<div class="col-lg-8">
 			  		<input type="text" class="form-control" name="txtnombre" placeholder="Ingrese el nombre del contenido " required="">
 				</div>
 				 </div>

 				 <div class="form-group">
 				 	<label class="col-lg-4" for="nombre">Nombre de la campaña</label>
 				 	<div class="col-lg-8">
 				 		<select class="form-control" required="" name="txtnombrecampana">
 				 			<?php foreach ($result->result() as $row) : ?>

 				 	        
 				 	        <option value="<?php echo $row->id_campana; ?>" > <?php echo $row->nombre_campana; ?> </option>
 	
 				 	   		 <?php endforeach; ?>
 				
 				 </select>
 				 	</div>
 				 </div>

 				  <div class="form-group">
 				 	<label class="col-lg-4" for="nombre">Selecciona el tipo de contenido</label>
 				 	<div class="col-lg-8">
 				 		<select class="form-control" required="" name="tipo">
 				 			<option value="photo">Imagen</option>
  							<option value="video">Video</option>
 					
 				 </select>
 				 	</div>
 				 </div>

 			  <div class="form-group">
 			    <label for="file_id" class="col-lg-4 control-label">Selecciona el contenido</label>
 			    <div class="col-lg-8">
 			      <input type="file" class="form-control filetoupload" id="file_id" 
 			             required="">
 			    </div>
 			  </div>

				 <div class="form-group">
				 	<label for="file_id" class="col-lg-4 control-label">Link del contenido</label>
				 	<div class="col-lg-8">
				 		<input type="text" class="form-control" name="userfile" id="userfile"> 
					 </div>
 			  </div>
 			


 			  <div class="form-group">
 			    <div class=" col-lg-12">
 			      <button type="submit" class="btn btn-default">Subir contenido</button>
 			    </div>
				 </div>
				 
		 
<!-- 
 			    <div class="form-group">
 			    <div class=" col-lg-12">
 			      <button id="cancelar" type="button" class="btn btn-default">Cancelar</button>
 			    </div>
 			  </div> -->
 			</form>
 	
 	
 		<a href="<?php echo base_url();?>cmostrar">Mostrar contenido</a>

 </div>

<!-- 

 <script src="https://code.jquery.com/jquery-3.2.1.js"
  				integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  				crossorigin="anonymous">
 </script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
		crossorigin="anonymous">
</script> -->
<!-- <script type="text/javascript" src="js/main.js"></script>
 -->
 </body>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/nwni/upload.js"></script>

 </html>