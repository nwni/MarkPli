<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

public function __construct(){
    parent::__construct();
  }
  public function index()
  {

	$tipo = $this->session->userdata('tipos_usuarios');

	if ($tipo=='1') {
	$this->load->view('core/header');
    $this->load->view('community/community_view');
    $this->load->view('core/footer');	
	}else
	{
		if ($tipo=='2') {
			$this->load->view('core/header_cm');
    $this->load->view('community/community_view');
    $this->load->view('core/footer');
		}else{
			if ($tipo=='3') {
						$this->load->view('core/header_uplo');
    $this->load->view('community/community_view');
    $this->load->view('core/footer');
			}

		}
	}
                 
                
    
  }

}
