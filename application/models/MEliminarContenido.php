<?php 
/**
* 
*/
class Meliminarcontenido extends CI_Model
{


		function eliminar($id){

			$this->db->where('id_contenido',$id);
			$this->db->delete('contenidos');
		}

}