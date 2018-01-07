<?php 
/**
* 
*/
class Mlista extends CI_Model
{



		function listaC(){

			$result2=$this->db->get('campanas');
		
			return $result2;

		}

}