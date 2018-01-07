<br>
<div class="row">
<div class="col-sm-6">
	<div class="card" id="card1">
		<div class="card-body">
 			<h4 class="card-title" id="cardInfo"></h4>
			<p class="card-text" id="profile"></p>
		</div>
	</div>	
</div>
<div class="col-sm-6">
	<div class="card" id="card2">
		<div class="card-body">
			<h4 class="card-title" id="cardPage"></h4>
			<p class="card-text" id="infoPage"></p>
		</div>
	</div>	
</div>	
</div>


<br>
<div class="row">
	<div class="col-sm-5">
	</div>
	<h4>Publicaciones del Usuario</h4>
	<div class="col-sm-5">
	</div>			
</div>
<br><br>
<div class="row">
	<div class="col-sm-4" id="feedPhotos" style="height: 500px; overflow-y: scroll;">
	</div>
	<div class="col-sm-4" id="feedStatus" style="height: 500px; overflow-y: scroll;">
	</div>	
	<div class="col-sm-4" id="feedVideos" style="height: 500px; overflow-y: scroll;">
	</div>
</div>

<br>
<button type="button" class="btn btn-primary btn-Aceptar" name="btn-Stats" onclick='event.preventDefault();createStats();'>Load Stats</button>        
<br>

<div class="row">
	<div class="col-sm-5"></div>
	<h1 id="videoViews"></h1>
	<div class="col-sm-5"></div>
</div>

<br>
<div class="row">
	<div class="col-sm-12">
			<canvas id="chartPostsDays" width="500" height="200"></canvas>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="grafica" id="graficaLikes" style="position:absolute; top:60px; left:10px; width:500px; height:500px;">
		<canvas id="chartLikes" width="100" height="100"></canvas>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="grafica" id="graficaComments" style="position:absolute; top:60px; left:10px; width:500px; height:500px;">
			<canvas id="chartCommentsDays" width="100" height="100"></canvas>
		</div>
	</div>
</div>
<br>

<script type="text/javascript" src="js/nwni/scheduledPost.js"></script>