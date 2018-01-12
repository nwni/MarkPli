<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller 
{
	public function __construct(){
    parent::__construct();
    session_start();
  }

	public function index()

	{  
		$tipo = $this->session->userdata('tipos_usuarios');


	if ($tipo=='1') {
		$this->load->view('core/header');
		$this->load->view('calendar');
    	$this->load->view('core/footer');
		
	}else
	{
		if ($tipo=='2') {
		$this->load->view('core/header_cm');
		$this->load->view('calendar');
    	$this->load->view('core/footer');
		}else{
			 $this->load->view('ingresar');

		}
	}

}
}

/* End of file calendar.php */
/* Location: ./application/controllers/calendar.php */