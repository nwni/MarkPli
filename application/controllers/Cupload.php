<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cupload extends CI_Controller {


  
  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url'));

    $this->load->database();
      $this->load->model('mupload');
          $this->load->model('Mlista');


  }

  public function index(){

  $tipo = $this->session->userdata('tipos_usuarios');

  if ($tipo=='1') {

    $result=$this->Mlista->listaC();
    $data= array('result'=>$result);    
    $this->load->view('core/header');
    $this->load->view('generadores/vUploadContenido',$data);
    $this->load->view('core/footer');
      }else
  {
    if ($tipo=='2') {
      
    }else{
      if ($tipo=='3') {
    $result=$this->Mlista->listaC();
    $data= array('result'=>$result);    
    $this->load->view('core/header_uplo');
    $this->load->view('generadores/vUploadContenido',$data);
    $this->load->view('core/footer');
      }

    }
  }
      
  
  }
  public function do_upload()
  {
    //Se carga el modelo para subir el contenido a la base de datos
    $this->load->model('mupload');
 
    
    //THIS CHANGE FUCKS EVERYTHING UP, THE THUMBNAILS

    $usu=$this->session->userdata('id_usuario');

    $datos['nombre_contenido']=$this->input->post('txtnombre');
    //$datos['nombre_imagen']=$filename = $data['file_name']; 
    $datos['nombre_imagen'] = '#';
    //$datos['link_img'] ='http://localhost/marketingp/'.'images/'.$filename = $data['file_name'];
    $datos['link_img'] = $this->input->post('userfile');
    $datos['fid_campana']=$_POST['txtnombrecampana']; 
    $datos['tipo']=$_POST['tipo'];
    $datos['fid_generador']=$usu;
    
    $this->mupload->setImagen($datos);
    
    //mostrar la vista correcta
  
    $result=$this->Mlista->listaC();
  
    $data= array('result'=>$result);
    
    $this->load->view('core/header');
    $this->load->view('generadores/vUploadContenido',$data);
    $this->load->view('core/footer');
  }
}  