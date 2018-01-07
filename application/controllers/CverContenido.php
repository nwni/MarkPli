<?php 
/**
* 
*/
class Cvercontenido extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		//$this->load->database();

		$this->load->model('MVerContenido');

		
	}


	public function ver(){

		$id=$this->uri->segment(3);
		$result=$this->MVerContenido->ver($id);

		$data= array('result'=>$result);
		
				       $this->load->view('core/header');
    
		$this->load->view('generadores/vVer',$data);
    $this->load->view('core/footer');
	
	}

	

}	
