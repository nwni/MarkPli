<?php 
/**
* 
*/
class mmostrar extends CI_Model
{


	function buscar(){

		
		$queryBus=$this->db->get('contenidos');

		if ($queryBus->num_rows()>0) {
			return $queryBus;
		}else{

			 $queryBus=FALSE;
			return  $queryBus;

		}
		}

}