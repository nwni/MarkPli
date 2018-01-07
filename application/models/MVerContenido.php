<?php 
/**
* 
*/
class Mvercontenido extends CI_Model
{


		function ver($id){

			$this->db->where('id_contenido',$id);
			$result=$this->db->get('contenidos');
		
			return $result;
	
		}

	
}