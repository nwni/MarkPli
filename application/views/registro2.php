<body>

 <div id="inicio" class="container">
 	<br>
 	<center><h1>Registro de Usuarios</h1></center>
 		<div class "row" >
 				<form method="POST"  action="<?php echo site_url('usuario/RegistroUsu');?>" role="form">
					
						
 					 <div class="col-md-6">
					
						<label>Nombre de usuario:</label>
						<input type="text"  name="NombreU" id="NombreU" required="" class="form-control" ">
						
						<div id='msg_usuario'></div>
					</div>

					<div class="col-md-6">
						<label >Contraseña:</label>
							<input type="password"  name="ContraseñaU" id="ContraseñaU" required="" class="form-control">
								</div>
							 <div class="col-md-6">
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
						
						
				 		<button class="btn btn-primary btn-registrar" type="summit" name="btn-registrar" >Registrar</button>
				 <a href="index.php/usuario/mostrar" class="btn btn-primary">Mostrar Usuarios Registrados</a>
 			</form>
 	
 	</div>
</div>
</body>

