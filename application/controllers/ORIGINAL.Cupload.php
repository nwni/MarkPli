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

  //  $this->load->view('vUploadContenido' );

        $result=$this->Mlista->listaC();
        $data= array('result'=>$result);
        
    $this->load->view('core/header');
    $this->load->view('generadores/vUploadContenido',$data);
    $this->load->view('core/footer');
      
  
  }



   public function do_upload()
        {


                $this->load->model('mupload');
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 25000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000 ;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('core/header');
                        $this->load->view('generadores/vUploadContenido', $error);
                        $this->load->view('core/footer');
               
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());


                       
                    
                          $this->load->view('generadores/upload_success',$data);
                         

                     
                            
 
                }




               $data = $this->upload->data();
                $file_info = $this->upload->data();
               $imagen = $file_info['file_name'];
 

            $datos['nombre_contenido']=$this->input->post('txtnombre');
            $datos['nombre_imagen']=$filename = $data['file_name']; 
            $datos['link_img'] ='http://localhost/marketingp/'.'images/'.$filename = $data['file_name'];
            $datos['fid_campana']=$_POST['txtnombrecampana']; 
            $datos['fid_generador']='1'; 
      
             


           // $this->galerias_model->save($imagen);
 
            $config['image_library'] = 'gd2';
            $config['source_image'] = './images/'.$imagen;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['thumb_marker'] = FALSE;
            $config['new_image'] = './images/tumb_'.$imagen;
            $config['width']         = 100;
            $config['height']       = 100;
 
            $this->load->library('image_lib', $config);
 
            $this->image_lib->resize();


              $this->mupload->setImagen($datos);

              //mostrar la vista correcta
       $result=$this->Mlista->listaC();

        $data= array('result'=>$result);
        
           $this->load->view('core/header');
                   $this->load->view('generadores/vUploadContenido',$data);
                        $this->load->view('core/footer');
       
      }
  }  