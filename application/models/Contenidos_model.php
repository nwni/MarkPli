<?php
class Contenidos_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  public function get_contenidos($idc=FALSE){
    if ($idc === FALSE){
      $this->db->select('id_campana, nombre_campana, id_contenido, nombre_contenido, '.
        'link_img, tipo,nombre_imagen, fid_campana, fid_generador');
      $this->db->from('campanas');
      $this->db->join('contenidos', 'campanas.id_campana = contenidos.fid_campana');
      $query = $this->db->get();
      return $query->result_array();
    }
    
    $this->db->select('id_campana, id_contenido,tipo, nombre_contenido, '.
        'link_img, fid_campana, fid_generador');
      $this->db->from('campanas');
      $this->db->join('contenidos', 'campanas.id_campana = contenidos.fid_campana');
      $this->db->where('id_contenido', $idc);
      $query = $this->db->get();
    return $query->row_array();
  }

 

}