<!DOCTYPE html>
<html>
<head>
	<title></title>


	
</head>
<body>


 <div id="inicio" class="container">
 	<center><h1>REGISTRO DE USUARIO</h1></center>
 	<div class "row">
 		<div class="col-md-4 col-md-offset-1">
 			<form method="POST"  action="<?php echo site_url('usuario/RegistroUsu');?>" role="form">
						
						<h2> Datos de usuario </h2>
						<div class="form-group">
							<label>Nombre de usuario:<input type="text"  name="NombreU" id="NombreU" required="" class="form-control"></label>
							<div id='msg_usuario'></div>  
							<label>Contraseña:<input type="password"  name="ContraseñaU" id="ContraseñaU" required="" class="form-control"></label>
							<select name="Nomtipo" class="form-control" required>
                                              <option value="">Seleccione un tipo</option>  
                                              <option value="Comunnity">Comunnity</option>  
                                              <option value="Administrador">Administrador</option>
                                              <option value="Uploader">Uploader</option>    
                             </select>
							<div id='msg_contraseña'></div>  
						</div>
 				<button class="btn btn-primary" type="summit">Enviar</button><div>  </div>
 			</form>
 			<a href="index.php/usuario/mostrar">Mostrar</a>
 		</div>
 	
 		<br><br>
 	
 	</div>
</div>



</body>
</html>
