<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {
  public function __construct(){
  		parent::__construct();
  		$this->load->model('usuario_model');
  }

public function index(){
		$this->load->view('core/header');
		$this->load->view('registro2');
		$this->load->view('core/footer');
	}
public function mostrar(){
		$this->load->view('core/header');
		
		
		$datos['usuarios']= $this->usuario_model->getUsuarios();
		$this->load->view('usuarios_view.php',$datos);
		$this->load->view('core/footer');
	}
	public function ModificarUsu($id){
		$this->load->view('core/header');
		$datos['usuarios']= $this->usuario_model->get_usuario($id);
		$this->load->view('usuarios_view_M.php',$datos);
		$this->load->view('core/footer');
	}
	public function actualizarusu(){
			//$this->load->model('usuario');
			$this->usuario_model->actualizarusu($this->input->post("id"),$this->input->post("Nombre"),
											$this->input->post("Contra"),
											$this->input->post("Tipo"));
			$this->Mostrar();
	}
	public function eliminarusuario(){
			//$this->load->model('usuario');
			$this->usuario_model->eliminar($this->input->post("id"));
			$datos['usuarios']= $this->usuario_model->getUsuarios();
			$this->load->view('usuarios_view.php',$datos);
	}

	public function RegistroUsu(){
		//$this->load->model('usuario_model');
		$datos["nick_usuario"]=$this->input->post('NombreU');
		$datos["contrasena_usuario"]=$this->input->post('ContraseñaU');
		$datos["tipo_usuario_nombre"]=$this->input->post('Nomtipo');
		
		if($datos["tipo_usuario_nombre"]=='Administrador'){
			$datos["tipos_usuarios"]=1;
		}else{
			if($datos["tipo_usuario_nombre"]=='Comunnity'){
			$datos["tipos_usuarios"]=2;
			}
			else{
				$datos["tipos_usuarios"]=3;
			}
		}
		$this->mostrar();
		// print_r($_POST);
		// exit;
	}
}
