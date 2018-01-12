<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_post extends CI_Controller {

public function __construct(){
    parent::__construct();
  }
  public function index()
  {
session_start();
	$tipo = $this->session->userdata('tipos_usuarios');

	if ($tipo=='1') {
	$this->load->view('core/header');
    $this->load->view('community/tipos_de_post');
    $this->load->view('core/footer');	
	}else
	{
		if ($tipo=='2') {
			$this->load->view('core/header_cm');
    $this->load->view('community/tipos_de_post');
    $this->load->view('core/footer');
		}else{
		$this->load->view('ingresar');
		}
	}
                }
            }