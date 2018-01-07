<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanas extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('campanas_model');
    $this->load->model('consultas');
    $this->load->helper('url_helper');
    $this->load->helper('url');
    $this->load->database();
  }

  public function index(){

$tipo = $this->session->userdata('tipos_usuarios');

  if ($tipo=='1') {
    $result=$this->db->get('campanas');
    $data=array('consulta'=>$result);
    $this->load->view('core/header');
    $this->load->view('community/campanas_view',$data);
    $this->load->view('core/footer');
    }else
    {
      if ($tipo=='2') {
    $result=$this->db->get('campanas');
    $data=array('consulta'=>$result);
    $this->load->view('core/header_cm');
    $this->load->view('community/campanas_view',$data);
    $this->load->view('core/footer');
      }else{
        if ($tipo=='3') {
          
        }

      }
    }
         


  }

  // public function view($idc){
  // //  $data['campana'] = $this->campanas_model->get_campanas($idc);

  //   $this->load->view('core/header');
  //   $this->load->view('community/campana_view', $data);
  //   $this->load->view('core/footer');
  // }

  public function GuardarCampana(){

    $res=$this->consultas->obcampanas();

    $datos['nombre_campana']=$this->input->post('txtnombre_campana');
    $datos['descripcion']=$this->input->post('txtdescripcion');
    $datos['objetivos']=$this->input->post('txtobjetivos');
    $datos['fecha_inicio']=$_POST['from']; 
    $datos['fecha_final']=$_POST['to']; 
    $datos['fid_cliente']=$res[0]->id_cliente;
    
      $this->campanas_model->guardar_campana($datos);


  $result=$this->db->get('campanas');
    $data=array('consulta'=>$result);

    $this->load->view('core/header');
    $this->load->view('community/campanas_view',$data );
    $this->load->view('core/footer');
  }
  public function NuevaCampana(){
    $this->load->model('consultas');

//     $usu = $this->session->userdata('id_usuario');
             
    //$result=$this->consultas->obcampanas();
    //var_dump($result);
    //die();
    $this->load->view('community/crear_campana_view' );
    //$this->load->view('core/footer');

  }

  public function Eliminar(){

    $id=$this->uri->segment(3);
    $this->campanas_model->Eliminar($id);

    $result=$this->db->get('campanas');
    $data=array('consulta'=>$result);    

    $this->load->view('core/header');
    $this->load->view('community/campanas_view',$data);
    $this->load->view('core/footer');
  
  }

  public function editar(){
    $id=$this->uri->segment(3);
     
    $obtenerEnlace = $this ->campanas_model->obtenerEnlace($id);
            if ($obtenerEnlace!=FALSE) {
                foreach ($obtenerEnlace->result() as $row) {
                    $id_campana=$id;

                    $nombre_campana=$row->nombre_campana;
                    $descripcion=$row->descripcion;
                    $objetivos=$row->objetivos;
                    $fecha_inicio=$row->fecha_inicio;
                   
                    $fecha_final=$row->fecha_final;
                    $fid_cliente=$row->fid_cliente;
                    

                }
                //$res=$this->consultas->obcampanas();
                $data = array(
                    'id_campana'=>$id_campana,
                    'nombre_campana'=>$nombre_campana,
                    'descripcion'=>$descripcion,
                    'objetivos'=>$objetivos,
                    'fecha_inicio'=>$fecha_inicio,
                    'fecha_final'=>$fecha_final,
                    'fid_cliente'=>$fid_cliente);   
                                                       //  var_dump($fid_cliente);
            }
            else{
                    $data=' ';
                return FALSE;
            }

      
   // $this->load->view('core/header');
    $this->load->view('community/editar_campanas_view',$data);
    //$this->load->view('core/footer');



    }

  public function editarEnlace(){    

        $id=$this->uri->segment(3);
              
   $res=$this->consultas->obcampanas();
           // $datos['id_campana']=$id;
            $datos['nombre_campana']=$this->input->post('txtnombre_campana');
            $datos['descripcion']=$this->input->post('txtdescripcion');
            $datos['objetivos']=$this->input->post('txtobjetivos');
            $datos['fecha_inicio']=$_POST['from']; 
            $datos['fecha_final']=$_POST['to']; 
           // $datos['fid_cliente']='';
            
 
             $datos['fid_cliente']=$res[0]->id_cliente;
           $this->campanas_model->editarEnlace($id,$datos);

    $result=$this->db->get('campanas');
    $data=array('consulta'=>$result);    

    $this->load->view('core/header');
    $this->load->view('community/campanas_view',$data);
    $this->load->view('core/footer');


        }
    

}
