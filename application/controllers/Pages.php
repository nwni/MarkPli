<?php 
	class Pages extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('post_model');
	}

		public function view($page = 'home'){
			if(!file_exists(APPPATH . 'views/pages/' . $page . '.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/' . $page);
			$this->load->view('templates/footer');

		}

		// public function showDB($id) {
		// 	$query = $this->db->get('posts');
		// 	$data['records'] = $query->result();

		// 	$this->load->helper('url');
		// 	$this->load->view('templates/header');
		// 	$this->load->view('pages/dbview', $data);
		// 	$this->load->view('templates/footer');
		// }



	//This method handles the posts request without parameters
		public function showPosts() {

			$data = array();

            $data['records'] = $this->post_model->getRows();
            $data['records2'] = $this->post_model->getRows2();
            //$data['text'] = $data['post']['title'];
            //load the details page view
            //print_r($data);

            $this->load->view('templates/header');
            $this->load->view('pages/dbview', $data);
            $this->load->view('templates/footer');

            //return print json_encode($data);
		}
		//I dont need this shit
		public function mostrar(){
			if ($this->input->is_ajax_request()) {
				$buscar = $this->input->post("buscar");
				$this->Post_model->mostrar($buscar);
				echo $buscar;
			} else {
				show_404();
			}
		}

		public function updateState(){
			$id = $this->input->post('id');
			$currentState = $this->input->post('estado');
			$this->post_model->updateState($id, $currentState);
			//var_dump($value);
			//echo $value;
			//$this->load->view('pages/dbview.html', $value);
			// $id = $this->uri->segment(3);
			//$res = $this->post_model->updateState($id);
			//return print json_encode($res);
		}

		public function accept(){
			$id = $this->input->post('id');
			$state = 'aceptado';
			$this->post_model->updateState($id, $state);
		}

		public function reject(){
			$id = $this->input->post('id');
			$state = 'rechazado';
			$this->post_model->updateState($id, $state);
		}		

		public function pending(){
			$id = $this->input->post('id');
			$state = 'pendiente';
			$this->post_model->updateState($id, $state);
		}

		public function publicado(){
			$id = $this->input->post('id');
			$state = 'publicado';
			$class = 'event-success';
			$this->post_model->updateState($id, $state);
			$this->post_model->updateEvent($id, $class);
		}

		//public function delete($id){ //DE ESTA FORMA PARA RECIBIR DIRECTO DEL BOTON
		public function delete(){ //ASÍ PARA AJAX
			
			$id = $this->input->post('id');
			var_dump($id);
			$this->post_model->deletePost($id);

	
		}
	}
 ?>