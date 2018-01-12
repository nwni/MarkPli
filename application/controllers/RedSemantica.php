<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RedSemantica extends CI_Controller 
{
    function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Red_model');
	}
    public function red(){
      session_start();
        $data = array();
        $tipo = $this->session->userdata('tipos_usuarios');
        $data['records'] = $this->Red_model->getTypes();

          if ($tipo=='1') {

    //$data['contenidos'] = $this->contenidos_model->get_contenidos();
    $this->load->view('templates/header');
          $this->load->view('pages/red_semantica', $data);
    $this->load->view('templates/footer');
      }else
  {
     $this->load->view('ingresar');
  }
    }
}