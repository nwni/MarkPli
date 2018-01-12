<script>var baseUrl = '<?php echo base_url() ?>';</script> 
<div class="container">
	<div class="row">
		<div class="col-md-4">
		<br>
			<h2 align="center">Categorias Principales</h2>
			<br>
			<br>
			<br>
			<table class="table table-hover">
			<?php
			if(isset($records))  { ?>
				<?php foreach ($records as $row) : ?>
				<tr>
					<th>Menú</th>
					<td class="cuno" id="uno" name="uno">
						<?php echo $row['UNO']; ?>
					</td>
				</tr>

				<tr>
					<th>Social Media Engagement</th>
					<td class="cdos" id="dos" name="dos">
						<?php echo $row['DOS']; ?>
					</td>		
				</tr>

				<tr>
					<th>Consejos</th>
					<td class="ctres" id="tres" name="tres">
						<?php echo $row['TRES']; ?>
					</td>	
				</tr>				

				<tr>
					<th>Días Festivos</th>
					<td class="ccuatro" id="cuatro" name="cuatro">
						<?php echo $row['CUATRO']; ?>
					</td>	
				</tr>

				<tr>
					<th>Trabajadores</th>
					<td class="ccinco" id="cinco" name="cinco">
						<?php echo $row['CINCO']; ?>
					</td>	
				</tr>

				</tr>
			<?php endforeach; ?>
			<?php }?>
			</table>
		</div>

		<div class="col-md-8">
		<br>
			<h2 align="center">Distribución de Publicaciones</h2>
			<br>
			<div>
				<canvas id="myChart"></canvas>
			</div>
		</div>
		<script>
			var ctx = document.getElementById("myChart");
			var menu = document.getElementById("uno").innerHTML;
			var socialMedia = document.getElementById("dos").innerHTML;
			var consejos = document.getElementById("tres").innerHTML;
			var diasFestivos = document.getElementById("cuatro").innerHTML;
			var trabajadores = document.getElementById("cinco").innerHTML;
			var myChart = new Chart(ctx, {
			type: 'radar',
			data: {
				labels: ["Menu", "Social Media", "Consejos", "Dias Festivos", "Trabajadores"],
				datasets: [{
				label: 'Posts',
				backgroundColor: "rgba(153,255,51,0.4)",
				borderColor: "rgba(153,255,51,1)",
				data: [menu, socialMedia, consejos, diasFestivos, trabajadores]
				}]
			}
			});
		</script>
	</div>
</div>
