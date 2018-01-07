  <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
      <div class="conteiner" align="center">


          <h1 >Iniciar Sesion</h1>
        
	       <form class="form-horizontal" action="<?php echo base_url(); ?>Clogin/ingresar" method="POST">


	   <div class="row">
        <div class="form-group">
          <label class="control-label col-sm-4" >Nombre de Usuario:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="txtusuario" placeholder="Ingrese su nombre de usuario" required="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4">Contraseña:</label>
                <div class="col-sm-4"> 
                    <input type="password" class="form-control" name="txtcontrasena" placeholder="Ingrese su Contraseña" required="">
                 </div>
        </div>
    </div>

    <div class="row">
       <div class="form-group"> 
            <div class="col-sm-12">
                <button type="submit" class="btn btn-default">Ingresar</button>
      	         <!-- //<a href="<?php echo base_url(); ?>Clogin">Registrarte</a> -->

             </div>
        </div>
     </div>
</form>

</div>




<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html