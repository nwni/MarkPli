<div class="container">
  <h2>Campañas publicitarias vigentes</h2>
</div>
<table class="table table-bordered campana-table" align="center">
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
        <?php echo "<a href=".base_url()."Campanas/Eliminar/".$row->id_campana.">Eliminar | </a>"?>
        <?php echo "<a href=".base_url()."Campanas/editar/".$row->id_campana.">Modificar</a>"?>
<!--         <?php echo "<a href=".base_url()."contenidos/>Modificar</a>"?>
 -->      </td>
    </tr>
  <?php endforeach; ?>
  <?php }?>
  </table>

   
  
    <a href="<?php echo base_url(); ?>Campanas/NuevaCampana">Nueva Campaña</a>   
   
   
