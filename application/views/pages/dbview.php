

<!-- 
	Table style
	<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
</style> -->

 <!-- Variable Global para obtener el URL actual -->
<script>var baseUrl = '<?php echo base_url() ?>';</script> 
<!-- <table class="table table-bordered table-hover" align="center" > -->
<table class="table table-hover">
	<thead>
		<tr>
		  <th>No. de post</th>
		  <th>Campaña</th>		  
		  <th>Titulo</th>
		  <th>Descripcion</th>
		  <th>Tipo Post</th>
		  <th>Hashtags</th>
		  <th>Fecha para publicar</th>
		  <th>Estado</th>
		</tr>
	</thead>

	<?php 

	if(isset($records))  { ?>
		<?php foreach ($records as $row) : ?>
		<tr>
			<td class="cid_post" name="id_post">
				<?php echo $row['id_post']; ?>
			</td>
			<td class="cnombre_campana" name="nombre_campana">
				<?php echo $row['nombre_campana']; ?>
			</td>				
			<td class="cnombre_contenido" name="nombre_contenido">
				<?php echo $row['nombre_contenido']; ?>
			</td>
			<td class="cdescripcion" name="descripcion">
				<?php echo $row['descripcion']; ?>
			</td>
			<td class="ctipo" name="tipo">
				<?php echo $row['tipo']; ?>
			</td>


			<td class="chashtags" name="hashtags">
				<?php echo $row['hashtags']; ?>
			</td>

			<td class="clink_img" name="link_img" style="display:none">
				<?php echo $row['link_img']; ?>
			</td>

			<td class="cfechaPublicar" name="fecha_publicar">
				<?php echo $row['fecha_publicar']; ?>
			</td>

			<td class="cestado" name="estado">
				<?php echo $row['estado']; ?>
			</td>
			<td>

			<div class="dropdown">
				<div class="btn-group">
					<button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					</button>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<form method="post" name="form" id="form">
							<input type="button" name="bForm" id="feed<?php echo $row['id_post'];?>"  data-target="#exampleModal" value="Preview" class="btn btn-primary btn-sm bForm" onclick='event.preventDefault();'></input>
							</form>
						</li>
						<li class="dropdown-item"><button type="button" class="btn btn-danger btn-sm btn-Eliminar" name="btn-Eliminar" onclick="deletePost(<?php echo $row['id_post'];?>);" >Eliminar</button></li>
					</ul>
				</div>
			</div>

			</td>	
		</tr>
	<?php endforeach; ?>
	<?php }?>
</table>


<!-- tabla para estados
 -->
 <h1>Posts de estados</h1>
 <table class="table table-hover">
	<thead>
		<tr>
		  <th>No. de post</th>
		  <th>Campaña</th>		  
		  <th>Descripcion</th>
		  <th>Hashtags</th>
		  <th>Fecha para publicar</th>
		  <th>Estado</th>
		</tr>
	</thead>

	<?php 

	if(isset($records2))  { ?>
		<?php foreach ($records2 as $row2) : ?>
		<tr>
			<td class="cid_post" name="id_post">
				<?php echo $row2['id_post']; ?>
			</td>
			<td class="cnombre_campana" name="nombre_campana">
				<?php echo $row2['nombre_campana']; ?>
			</td>				
			<td class="cdescripcion" name="descripcion">
				<?php echo $row2['descripcion']; ?>
			</td>
			<td class="chashtags" name="hashtags">
				<?php echo $row2['hashtags']; ?>
			</td>
			<td class="ctipo" name="tipo">
				<?php echo $row2['tipo']; ?>
			</td>
			<td class="cfechaPublicar" name="fecha_publicar">
				<?php echo $row2['fecha_publicar']; ?>
			</td>

			<td class="cestado" name="estado">
				<?php echo $row2['estado']; ?>
			</td>
			<td>

			<div class="dropdown">
				<div class="btn-group">
					<button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					</button>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<form method="post" name="form" id="form">
							<input type="button" name="bForm" id="feed<?php echo $row2['id_post'];?>"  data-target="#exampleModal" value="Preview" class="btn btn-primary btn-sm bForm" onclick='event.preventDefault();'></input>
							</form>
						</li>
						<li class="dropdown-item"><button type="button" class="btn btn-danger btn-sm btn-Eliminar" name="btn-Eliminar" onclick="deletePost(<?php echo $row2['id_post'];?>);" >Eliminar</button></li>
					</ul>
				</div>
			</div>
			</td>

		</tr>
	<?php endforeach; ?>
	<?php }?>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="idcampana"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container modal-body" id="modal-body">

    </div>
      <div class="modal-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<button type="button" class="btn btn-danger btn-Rechazar" name="btn-Rechazar" onclick='event.preventDefault();'><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-warning btn-Pausar" name="btn-Pausar" onclick='event.preventDefault();'><i class="fa fa-pause" aria-hidden="true"></i></button>               
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></button>			
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-Aceptar" name="btn-Aceptar" onclick='event.preventDefault();'><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-success bPost" name="bPost" onclick='event.preventDefault();'><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>			
					</div>
					</div>			
				</div>			
			</div>
      </div>
    </div>
  </div>
</div>

<!-- <script language="javascript" src="js/nwni/dbview.js"></script> -->
<!-- <script type="text/javascript" src="js/nwni/syncCall.js"></script> -->
<script language="javascript" src="js/nwni/dbview-TEST.js"></script>