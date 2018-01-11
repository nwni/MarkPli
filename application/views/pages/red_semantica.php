<script>var baseUrl = '<?php echo base_url() ?>';</script> 
<h2>Red Semántica</h2>
<table class="table table-hover" align="center" >
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
		<td class="cuno" id="uno" name="uno">
			<?php echo $row['UNO']; ?>
		</td>
		<td class="cdos" id="dos" name="dos">
			<?php echo $row['DOS']; ?>
		</td>				
		<td class="ctres" id="tres" name="tres">
			<?php echo $row['TRES']; ?>
		</td>
		<td class="ccuatro" id="cuatro" name="cuatro">
			<?php echo $row['CUATRO']; ?>
		</td>
		<td class="ccinco" id="cinco" name="cinco">
			<?php echo $row['CINCO']; ?>
		</td>
	</tr>
<?php endforeach; ?>
<?php }?>
</table>

<br>
<br>

<div class="container">
  <h2>Cantidad de Posts</h2>
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