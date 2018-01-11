<?php 
/**
* 
*/
class Celiminarcontenido extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		//$this->load->database();
		$this->load->model('MEliminarContenido');
		  $this->load->model('Mlista');
		  $this->load->model('mmostrar');
		
	}


	public function eliminar(){

		$id=$this->uri->segment(3);
		$this->MEliminarContenido->eliminar($id);

	
         $result=$this->db->get('contenidos');
		$data=array('consulta'=>$result);
        

$this->load->view('core/header');
$this->load->view('generadores/vmostrar',$data);
$this->load->view('core/footer');
  
	}

}	