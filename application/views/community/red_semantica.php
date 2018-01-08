<script>var baseUrl = '<?php echo base_url() ?>';</script> 
<table class="table table-bordered" align="center" >
	<thead>
		<tr>
		  <th>Menú</th>
		  <th>Social Media Engagement</th>		  
		  <th>Consejos</th>
		  <th>Días Festivos</th>
		  <th>Trabajadores</th>
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