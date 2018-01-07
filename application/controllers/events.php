<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->load->view('core/header');
		$this->load->view("community/tipos_de_post");
    	$this->load->view('core/footer');
		
	}

	public function save()
	{
		$this->form_validation->set_rules('from', 'Desde', 'trim|required|xss_clean');
        $this->form_validation->set_rules('to', 'Hasta', 'trim|required|xss_clean');
		// $this->form_validation->set_rules('url', 'Url', 'trim|required|xss_clean');
  //       $this->form_validation->set_rules('title', 'Título', 'trim|required|xss_clean');
  //       $this->form_validation->set_rules('event', 'Evento', 'trim|required|xss_clean');
        $this->form_validation->set_rules('class', 'Tipo de evento', 'trim|required|xss_clean');

        // $this->form_validation->set_message('required', 'El  %s es requerido');

        // if($this->form_validation->run() == FALSE)
        // {
        //     $this->index();
        // }
        // else
        // {
     		 $this->load->model("events_model");
        	$this->events_model->add();
        	redirect("calendar");
        }



	// $datos['tipo']='status';
 //    $datos['tags']=$this->input->post('tags');
 //    $datos['hashtags']=$this->input->post('hashtags');
 //    $datos['descripcion']=$this->input->post('descripcion');
 //    $datos['estado']='pendiente'; 
 //    $datos['start']=$_POST['from'];
 //    $datos['end']=$_POST['to'];
 //    $datos['fid_contenido']='16';  
 //    $datos['fid_sobrinity']='1';

 //     $this->load->model("events_model");

 //      $this->events_model->add($datos);
 //       	redirect("calendar");
	

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$this->load->model('events_model');
			$events = $this->events_model->getAll();
			echo json_encode(
				array(
					"success" => 1,
					"result" => $events
				)
			);
		}
	}

	public function render($id_post = 0)
	{
		if($id_post != 0)
		{
			echo $id_post;
		}
	}
}


/* End of file events.php */
/* Location: ./application/controllers/events.php */
