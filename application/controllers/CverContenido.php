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
		 session_start();

		
	}


	public function ver(){

		$id=$this->uri->segment(3);
		$result=$this->MVerContenido->ver($id);
		$this->load->model('MVerContenido');
		$data= array('result'=>$result);


		$tipo = $this->session->userdata('tipos_usuarios');

		  if ($tipo=='1') {
		   
		    $this->load->view('core/header');
		   $this->load->view('generadores/vVer',$data);
		    $this->load->view('core/footer');
		    }else
		    {
		    	if ($tipo=='2') {
		    			$this->load->view('core/header_cm');
		  				$this->load->view('generadores/vVer',$data);
		  			    $this->load->view('core/footer');
		    	
		    	}else{
		    			if ($tipo=='3') {
		    			$this->load->view('core/header_uplo');
		  				$this->load->view('generadores/vVer',$data);
		  			    $this->load->view('core/footer');
		    		}
		    		else{

		  		$this->load->view('ingresar');


		    		}


		    	}
		    	
		    
				
			}
		
	// $this->load->view('core/header');
	// $this->load->view('generadores/vVer',$data);
 //    $this->load->view('core/footer');
	
	}

	

}	
