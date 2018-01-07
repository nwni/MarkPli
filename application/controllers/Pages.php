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
            //$data['text'] = $data['post']['title'];
            //load the details page view
            //print_r($data);

            $this->load->view('templates/header');
            $this->load->view('pages/dbview', $data);
            $this->load->view('templates/footer');

            //return print json_encode($data);
		}

		//This method handles the post request with parameters
		public function showPost() {

			// Stores the item send by the {post} method
			$data = $this->input->post('id');

			$query = array();
			// Calls the {getRows} method from the model and sends a parameter wich is an user ID
			// stores the result as an array
			$query['rquery'] = $this->post_model->getRows($data);

			// returns the result formated as json
            return print json_encode($query);
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

		//public function delete($id){ //DE ESTA FORMA PARA RECIBIR DIRECTO DEL BOTON
		public function delete(){ //ASÍ PARA AJAX
			
			$id = $this->input->post('id');
			var_dump($id);
			$this->post_model->deletePost($id);

	
		}
	}
 ?>