<?php 
/**
* 
*/
class cmostrar extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array( 'url'));
		$this->load->database();
		//$this->load->database();

	//	$this->load->model('mmostrar');
		//	$this->load->view('vmostrar');
		
	}


	public function index(){

		$result=$this->db->get('contenidos');
		$data=array('consulta'=>$result);
		 $this->load->view('core/header');
    
		$this->load->view('generadores/vmostrar',$data);
    $this->load->view('core/footer');

	}



	// public function buscar(){

// $this->load->model('mmostrar');
// $data=' ';
	
			  
	
// 			$result=$this->mmostrar->buscar();
// 			if ($result != FALSE) {
// 					$data= array('result'=>$result);
// 				}
// 				else{

// 					$data=array('result'=>NULL);
// 				}

// 		$this->load->view('vmostrar',$data);

// }
}	
