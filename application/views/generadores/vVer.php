<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container" align="center">
		 
		<?php foreach ($result->result() as $row) : ?>
			<h1><?php echo $row->nombre_contenido; ?></h1>
     	<?php 
     		if ($row->tipo=="video") {?>
     			<video controls src="<?php echo $row->link_img ?>" " width="400" height="400" autoplay ></video>
     		<?php }else{ ?>
     			  <img src="<?php echo $row->link_img ?>" " width="400" height="400" >

     		<?php  }?>
          	

         

	        
	          
   		 <?php endforeach; ?>
       
</div>
</body>
</html>