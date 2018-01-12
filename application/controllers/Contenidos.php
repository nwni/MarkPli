<?php
class Contenidos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('contenidos_model');
    $this->load->model('posts_model');
    $this->load->helper('url_helper');
    $this->load->helper('form');
    $this->load->model('Mlista');
     session_start();
  }


  public function index(){
    $tipo = $this->session->userdata('tipos_usuarios');

  if ($tipo=='1') {
    $data['contenidos'] = $this->contenidos_model->get_contenidos();
    $this->load->view('core/header');
    $this->load->view('community/contenidos_pub_view', $data);
    $this->load->view('core/footer');
      }else
  {
    if ($tipo=='2') {
      $data['contenidos'] = $this->contenidos_model->get_contenidos();
    $this->load->view('core/header_cm');
    $this->load->view('community/contenidos_pub_view', $data);
    $this->load->view('core/footer');
    }else{
      
    }
  }

  }
 /* public function view($idc = NULL){
  
      $data['c_item'] = $this->contenidos_model->get_contenidos($idc);
      $this->load->view('core/header');
      $this->load->view('community/contenido_pub_view', $data);
      $this->load->view('core/footer');
    }
  */
  public function crear($id){
    $data['contenido'] = $this->contenidos_model->get_contenidos($id);
    $this->load->view('core/header');
    $this->load->view('community/crear_post_view', $data);
    $this->load->view('core/footer');
  }

  public function crearPost($idcon = 0, $idcom = 0){
    $data['contenidos'] = $this->contenidos_model->get_contenidos();
    $this->posts_model->set_post($idcon, $idcom);
    $this->load->view('core/header');
    $this->load->view('community/contenidos_pub_view', $data);
    $this->load->view('core/footer');
  }




 public function crearPostEstado(){

     $result=$this->Mlista->listaC();
        $data= array('result'=>$result);
    //$this->load->view('core/header');
    $this->load->view('community/crear_post_status2',$data);
    //$this->load->view('core/footer');
  }

 public function crearPostEstado2(){

     $result=$this->Mlista->listaC();
        $data= array('result'=>$result);
    //$this->load->view('core/header');
    $this->load->view('community/crear_post_status',$data);
    //$this->load->view('core/footer');
  }

 public function crearPostMultimdia2($id){
    $data['contenido'] = $this->contenidos_model->get_contenidos($id);
    //$this->load->view('core/header');
    $this->load->view('community/crear_post_multimedia2', $data);
    //$this->load->view('core/footer');
  }


 public function crearPostMultimdia($id){
    $data['contenido'] = $this->contenidos_model->get_contenidos($id);
    //$this->load->view('core/header');
    $this->load->view('community/crear_post_multimedia', $data);
    //$this->load->view('core/footer');
  }


//MOSTRAR CONTENIDO AGENDA
  public function mostrarContenidoMul2(){
    // $data['contenidos'] = $this->contenidos_model->get_contenidos();
    // $this->load->view('core/header');
    // $this->load->view('community/mostra_contenido_multimedia', $data);
    // $this->load->view('core/footer');


        $data['contenidos'] = $this->contenidos_model->get_contenidos();
    // $this->load->view('core/header');
    // $this->load->view('community/mostra_contenido_multimedia2 ', $data);
    // $this->load->view('core/footer');


          $tipo = $this->session->userdata('tipos_usuarios');

  if ($tipo=='1') {
   
    $this->load->view('core/header');
  $this->load->view('community/mostra_contenido_multimedia', $data);
    $this->load->view('core/footer');
      }else
  {
    if ($tipo=='2') {
 
    $this->load->view('core/header_cm');
  $this->load->view('community/mostra_contenido_multimedia', $data);
    $this->load->view('core/footer');
    }else{
      
    }
  }


  }


  public function crearPostMul($idcon = 0, $idcom = 0){
    $data['contenidos'] = $this->contenidos_model->get_contenidos();
    $this->posts_model->set_post($idcon, $idcom);

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
      
    }
  }

  }

// USUARIO CM MOSTRAR CONTENIDO
    public function mostrarContenidoMul(){
    $data['contenidos'] = $this->contenidos_model->get_contenidos();
    // $this->load->view('core/header');
    // $this->load->view('community/mostra_contenido_multimedia2 ', $data);
    // $this->load->view('core/footer');


          $tipo = $this->session->userdata('tipos_usuarios');

  if ($tipo=='1') {
   
    $this->load->view('core/header');
  $this->load->view('community/mostra_contenido_multimedia2', $data);
    $this->load->view('core/footer');
      }else
  {
    if ($tipo=='2') {
 
    $this->load->view('core/header_cm');
  $this->load->view('community/mostra_contenido_multimedia2', $data);
    $this->load->view('core/footer');
    }else{
      
    }
  }


  }

//CM CRERAR ESTADO
    public function crearEstado(){
  $this->posts_model->set_postES($idcon=null, $idcom=null);

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
      
    }
  }



   // // $data['contenidos'] = $this->contenidos_model->get_contenidos();
   //  $this->posts_model->set_postES($idcon=null, $idcom=null);
   //  $this->load->view('core/header');
   //  $this->load->view('calendar');
   //  $this->load->view('core/footer');
  }

}