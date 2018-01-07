<?php 
 ?>

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
 
 <div class="container" align="center">

	<h1>Nueva Campaña</h1> 
 		<form class="form-horizontal"  method="POST"  action="<?php echo base_url();?>Campanas/GuardarCampana/">

 			  <div class="form-group">
 			    <label  class="col-lg-2 control-label">Nombre Campaña</label>
					<div class="col-lg-10">
 			  		<input type="text" class="form-control" name="txtnombre_campana" placeholder="Ingrese el nombre de la Campaña" required="">
 				</div>
 				 </div>

 			  <div class="form-group">
 			    <label  class="col-lg-2 control-label">Descripcion</label>
					<div class="col-lg-10">
 			  		<input type="text" class="form-control" name="txtdescripcion" placeholder="Ingrese la descripcion de la campaña" required="">
 				</div>
 				 </div>

 			  <div class="form-group">
 			    <label  class="col-lg-2 control-label">Objetivos Campaña</label>
					<div class="col-lg-10">
 			  		<input type="text" class="form-control" name="txtobjetivos" placeholder="Ingrese los objetivos de la campaña" required="">
 				</div>
 				 </div>


 				<div class="form-group">
                	<label  class="col-lg-2 control-label">Fecha inicio campaña</label>
                	 <div class="col-lg-4">
                    <div class='input-group date' id='from'>
                        <input type='text' name="from" class="form-control" required=""  readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                    </div>
                </div>
 				
                <div class="form-group">
                    <label  class="col-lg-2 control-label">Fecha final campaña</label>
                    <div class="col-lg-4">
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" class="form-control" required="" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                    </div>
                </div>
          
 			  <div class="form-group">
 			    <div class=" col-lg-12">
 			      <button type="submit" class="btn btn-default">Crear Campaña</button>
 			    </div>
 			  </div>

 		</form>

 		<br>
 		<br>

 </div>

  
<?php echo form_close() ?>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            
        });
    </script>
 </body>
 </html>