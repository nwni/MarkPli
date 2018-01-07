<?php
class Campanas_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  public function get_campanas($idc = FALSE){

    $queryBus=$this->db->get('campanas');

    if ($queryBus->num_rows()>0) {
      return $queryBus;
    }else{

       $queryBus=FALSE;
      return  $queryBus;

    }
}
  
  public function guardar_campana($datos){

    $campos = array(
      'nombre_campana' =>$datos['nombre_campana'] ,
      'descripcion' =>$datos['descripcion'],
      'objetivos' =>$datos['objetivos'],
      'fecha_inicio' =>$datos['fecha_inicio'],
      'fecha_final' =>$datos['fecha_final'],
      'fid_cliente' =>$datos['fid_cliente']);

    //sentecia para insertar en la base de datos
    $this->db->insert('campanas',$datos);
 
  }

  public function Eliminar($id){

      $this->db->where('id_campana',$id);
      $this->db->delete('campanas');
    }


    function obtenerEnlace($id){
    $this->db->where('id_campana',$id);
    $query=$this->db->get('campanas');
    if ($query->num_rows()>0) {
      return $query;
    }else
    {

      return FALSE;
    }

  }

  function editarEnlace($id,$datos){
    $this->db->where('id_campana',$id);
    $this->db->update('campanas',$datos);
    //mandar la vista
    //$this->load->view('vadmi');

  


  }
}