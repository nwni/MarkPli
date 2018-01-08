<?php
class Posts_model extends CI_Model {

  public function __construct(){
    
    parent::__construct();
    $this->load->database();

  }

  public function get_contenidos($idc = FALSE){
    if ($idc === FALSE){
      $query = $this->db->get('posts');
      return $query->result_array();
    }
    
    $query = $this->db->get_where('posts', array('id_post' => $idc));
    return $query->row_array();
  }

   public function set_post($fidcontenido, $fidcomm){
    $tipo_evento="event-important";
    $data = array(
        'descripcion' => $this->input->post('descripcion'),
        'fid_contenido' => $fidcontenido,
        'estado' => 'pendiente',
        'fid_sobrinity' => $fidcomm,
        'tipo' => $this->input->post('tipo'),
        'hashtags' => $this->input->post('hashtags'),
        'start' => $this->_formatDate($this->input->post("to")),
        'end' => $this->_formatDate($this->input->post("to")),
        'class' =>$tipo_evento,
        'fecha_publicar' => $this->input->post('to'),
        'TipoPublicacion' => $this->input->post('txtTipoPublicacion'),
        'fid_campana'  => $this->input->post('txtnombrecampana')
    );

    return $this->db->insert('posts', $data);
  }

public function set_postEs($fidcontenido, $fidcomm){
    $tipo_evento="event-important";
    $status='status';
    $usu=$this->session->userdata('id_usuario');
    $data = array(
        'descripcion' => $this->input->post('descripcion'),
        'fid_contenido' =>15,
        'estado' => 'pendiente',
        'fid_sobrinity' => $usu,
        'tipo' =>$status,
        'hashtags' => $this->input->post('hashtags'),
        'start' => $this->_formatDate($this->input->post("to")),
        'end' => $this->_formatDate($this->input->post("to")),
        'class' =>$tipo_evento,
        'fecha_publicar' => $this->input->post('to'),
        'TipoPublicacion' => $this->input->post('txtTipoPublicacion'),
        'fid_campana'  => $this->input->post('txtnombrecampana')
    );

    return $this->db->insert('posts', $data);
  }
  /**
  * @desc - formatea una fecha a microtime para añadir al evento tipo 1401517498985
  * @access private
  * @author Iparra
  * @return strtotime
  */
  private function _formatDate($date)
  {
    return strtotime(substr($date, 6, 4)."-".substr($date, 3, 2)."-".substr($date, 0, 2)." " .substr($date, 10, 6)) * 1000;
  }

}