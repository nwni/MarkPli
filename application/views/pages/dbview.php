

<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
</style>

 <!-- Variable Global para obtener el URL actual -->
<script>var baseUrl = '<?php echo base_url() ?>';</script> 
<table class="table table-bordered" align="center" >
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
			<form method="post" name="form" id="form">
					<input type="button" name="bForm" id="feed<?php echo $row['id_post'];?>"  data-target="#exampleModal" value="Preview" class="btn btn-primary bForm" onclick='event.preventDefault();'></input>
			</form>
			
			<button type="button" class="btn btn-danger btn-Eliminar" name="btn-Eliminar" onclick="deletePost(<?php echo $row['id_post'];?>);" >Eliminar</button>
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
      <div class="modal-body" id="modal-body">

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-Rechazar" name="btn-Rechazar" onclick='event.preventDefault();'>Rechazar</button>
        <button type="button" class="btn btn-warning btn-Pausar" name="btn-Pausar" onclick='event.preventDefault();'>Pausar</button>               
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-Aceptar" name="btn-Aceptar" onclick='event.preventDefault();'>Aceptar</button>        
        <!-- <button type="button" class="btn btn-primary bPost" name="bPost" onclick='event.preventDefault();'>Upload!</button> -->
      </div>
    </div>
  </div>
</div>

<!-- <script language="javascript" src="js/nwni/dbview.js"></script> -->
<!-- <script type="text/javascript" src="js/nwni/syncCall.js"></script> -->
<script language="javascript" src="js/nwni/dbview-TEST.js"></script>