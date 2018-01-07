<?php 
/**
* 
*/
class Mmodificarcontenido extends CI_Model
{


	function obtenerEnlace($id){
		$this->db->where('id_contenido',$id);
		$query=$this->db->get('contenidos');
		if ($query->num_rows()>0) {
			return $query;
		}else
		{

			return FALSE;
		}

	}

	function editarEnlace($id,$datos){
		$this->db->where('id_contenido',$id);
		$this->db->update('contenidoss',$datos);
		//mandar la vista
		//$this->load->view('vadmi');

	


	}

}