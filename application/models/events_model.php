<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		//date_default_timezone_set("Europe/Madrid"); 
	}

	/**
	* @desc - añade un nuevo evento
	* @access public
	* @author Iparra
	* @return bool
	*/
	public function add()
	{

		// $edn=$this->_formatDate($this->input->post("end"));
		// $to=$this->_formatDate($this->input->post("start"));
		// // $this->db->set("end", $this->_formatDate($this->input->post("to")));
		//  $campos = array(
  //     'tipo' =>$datos['tipo'] ,
  //     'tags' =>$datos['tags'],
  //     'hashtags' =>$datos['hashtags'],
  //     'descripcion' =>$datos['descripcion'],
  //     'estado' =>$datos['estado'],
  //     'start' =>$to,
  //     'end' =>$edn,
  //     'fid_contenido' =>$datos['fid_contenido'],
  //      'fid_sobrinity' =>$datos['fid_sobrinity']);

    //sentecia para insertar en la base de datos
   // $this->db->insert('posts',$datos);
		$this->db->set("tipo",'status');
		//$this->db->set("tipo", $this->"status");
		
		$this->db->set("hashtags", $this->input->post("hashtags"));
		$this->db->set("descripcion", $this->input->post("descripcion"));
		$this->db->set("estado",'pendiente');
		$this->db->set("start", $this->_formatDate($this->input->post("to")));
		$this->db->set("end", $this->_formatDate($this->input->post("to")));
		$this->db->set("class",'event-important');
		$this->db->set("fecha_publicar", $this->input->post("to"));
		$this->db->set("fid_contenido",'16');
		$this->db->set("fid_sobrinity",'1');
		if($this->db->insert("posts"))
		//	$datos['fecha_final']=$_POST['to']; 
		{
			return TRUE;
		}
		return FALSE;
	 }

	/**
	* @desc - obtiene todos los registros de events
	* @access public
	* @author Iparra
	* @return object
	*/
	public function getAll()
	{
		$query = $this->db->get('posts');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return object();
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
/* End of file events_model.php */
/* Location: ./application/models/events_model.php */