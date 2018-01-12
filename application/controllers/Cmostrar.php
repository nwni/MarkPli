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
		 session_start();
		//$this->load->database();

	//	$this->load->model('mmostrar');
		//	$this->load->view('vmostrar');
		
	}


	public function index(){

	$result=$this->db->get('contenidos');
	$data=array('consulta'=>$result);




	$tipo = $this->session->userdata('tipos_usuarios');

  if ($tipo=='1') {
   
    $this->load->view('core/header');
    $this->load->view('generadores/vmostrar',$data);
    $this->load->view('core/footer');
    }else
    {
    	if ($tipo=='3') {
    			$this->load->view('core/header_uplo');
  				$this->load->view('generadores/vmostrar',$data);
  			    $this->load->view('core/footer');
    		}
    		else{

  		$this->load->view('ingresar');


    		}
    
		
	}
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
