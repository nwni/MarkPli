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
		  session_start();
		
	}


	public function eliminar(){

		$id=$this->uri->segment(3);
		$this->MEliminarContenido->eliminar($id);

	
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

			
		// $this->load->view('core/header');
		// $this->load->view('generadores/vmostrar',$data);
		// $this->load->view('core/footer');
  
	}

}	