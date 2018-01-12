<div class="container">
<br>
<h2 align="center">Campañas Publicitarias </h2>
<br>
</div>
<table class="table table-hover" align="center">
    <thead>
      <tr>
        <th>Numero de Campaña</th>
        <th>Nombre Campaña</th>
        <th>Descripción</th>
        <th>Objetivos</th>
        <th>Fecha Inicio</th>
        <th>Fecha Final</th>
 
        <th>Acciones</th>
      </tr>
    </thead>

  <?php 

  if(isset($consulta))  { ?>
    <?php foreach  ($consulta->result() as $row) : ?>
    <tr>
      <td class="cid_post" name="id_post">
        <?php echo $row->id_campana; ?>
      </td>
      <td class="cnombre_campana" name="nombre_campana">
        <?php echo $row->nombre_campana; ?>
      </td>       
      <td class="cnombre_contenido" name="nombre_contenido">
        <?php echo $row->descripcion; ?>
      </td>
      <td class="cdescripcion" name="descripcion">
        <?php echo $row->objetivos; ?>
      </td>
      <td class="ctipo" name="fecha_inicio">
        <?php echo $row->fecha_inicio; ?>
      </td>
      <td class="ctipo" name="fecha_final">
        <?php echo $row->fecha_final; ?>
      </td>
     
      <td>

        <div class="dropdown">
				<div class="btn-group">
					<button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					</button>
					<ul class="dropdown-menu">
						<li class="dropdown-item">
              <?php echo "<a  class='btn btn-danger btn-sm' href=".base_url()."Campanas/Eliminar/".$row->id_campana.">Eliminar </a>"?>
						</li>
						<div class="dropdown-divider"></div>
						<li class="dropdown-item">
              <?php echo "<a class='btn btn-warning btn-sm' href=".base_url()."Campanas/editar/".$row->id_campana.">Modificar</a>"?>
            </li>
					</ul>
				</div>
			</div>

 </td>
    </tr>
  <?php endforeach; ?>
  <?php }?>
  </table>


  
    <a class="btn btn-success" href="<?php echo base_url(); ?>Campanas/NuevaCampana">Nueva Campaña</a>   
   
   
