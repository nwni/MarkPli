<!DOCTYPE html>
<html>
<head>
	<title></title>

	          <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script> 
        <script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
       <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
</head>
<body>

<div id="inicio" class="container" align="center">
	<form action="<?php echo base_url() ?>Clogin/valida" method="POST" role="form">
		<h1>Restaurantes</h1>
		<center><h3>INGRESAR</h3><br>
			<img width="400" height="300" src="<?php echo base_url() ?>Imagenes/logo.jpg">
			<br>
			<label>Nombre de Usuario:<input type="text" required name="IngresarU" class="form-control"></label><br>
			<label>Constraseña:<input type="password" required name="ConstraseaIngreU" class="form-control"></label><br><br>
			<button class="btn btn-primary" name="ContraseñaUsuario" type="submit">Ingresar</button>
		</center>
	</form>
	
</div>

</body>
</html>


