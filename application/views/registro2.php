<body>

 <div id="inicio" class="container">
 	<br>
 	<center><h2>Registro de Usuarios</h2></center>
 	<br>
 		<div class="row" >
 				<form method="POST"  action="<?php echo site_url('usuario/RegistroUsu');?>" role="form">
 					 <div class="col-md-12">
						<label>Nombre de usuario:</label>
						<input type="text"  name="NombreU" id="NombreU" class="form-control" required>
						<div id='msg_usuario'></div>
					</div>
					<div class="col-md-12">
						<label >Contraseña:</label>
							<input type="password"  name="ContraseñaU" id="ContraseñaU" class="form-control" require>
					</div>
					<div class="col-md-12">
						<label >Tipo de usuario:</label>
							<select name="Nomtipo" class="form-control" required>
								<option value="">Seleccione un tipo</option>  
								<option value="Comunnity">Comunnity</option>  
								<option value="Administrador">Administrador</option>
								<option value="Uploader">Uploader</option>    
                         	</select>
						<div id='msg_contraseña'></div>
					</div>
				<br>	
				<div class="row">
					<div class="col-md-4">
				 		<button type="submit" class="btn btn-success btn-registrar"  name="btn-registrar">Registrar</button>
					</div>
				 	<div class="col-md-4">
				 		<a href="index.php/usuario/mostrar" class="btn btn-primary">Mostrar Usuarios Registrados</a>
				 	</div>
				  </div>
 			</form>
 	</div>
</div>
</body>

