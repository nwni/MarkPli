<?php 
/**
* 
*/
class Cmodificarcontenido extends CI_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();

        $this->load->model('MModificarContenido');
          $this->load->model('Mlista');
        
    }


    
    public function editar(){
        $id=$this->uri->segment(3);
        $obtenerEnlace = $this ->MModificarContenido->obtenerEnlace($id);
            if ($obtenerEnlace!=FALSE) {
                foreach ($obtenerEnlace->result() as $row) {
                    $id_contenido=$row->$row->id_contenido;
                    $nombre_contenido=$row->nombre_contenido;
                    $nombre_imagen=$row->nombre_imagen;
                    $link_img=$row->link_img;
                    $fid_campana=$row->fid_campana;
                    $fid_generador=$row->fid_generador;
                    

                }
                $data = array(
                    'id_contenido'=>$id_contenido,
                    'nombre_contenido'=>$nombre_contenido,
                    'nombre_imagen'=>$nombre_imagen,
                    'link_img'=>'http://localhost/marketingp/'.'images/'.$nombre_imagen,
                    'fid_campana'=>$fid_campana,
                    'fid_generador'=>$fid_generador);   
            }
            else{
                    $data=' ';
                return FALSE;
            }

        
           $result=$this->Mlista->listaC();
        $dato= array('result'=>$result);
        
       $this->load->view('core/header');
      $this->load->view('generadores/vEditar',$dato,$data);
    $this->load->view('core/footer');



    }

    function editarEnlace(){    

        $id=$this->uri->segment(3);


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
                        $this->load->view('generadores/upload_success',$error);
                        $this->load->view('core/footer');

                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());


                       


                        $this->load->view('generadores/upload_success',$data);
                            
 
                }



           // $this->load->model('mRegistrarProducto');

               $data = $this->upload->data();
                $file_info = $this->upload->data();
               $imagen = $file_info['file_name'];
 
            $datos['id_contenido']=$id_contenido;
            $datos['nombre_contenido']=$this->input->post('txtnombre');
            $datos['nombre_imagen']=$filename = $data['file_name']; 
            $datos['link_img']='http://localhost/marketingp/'.'images/'.$filename = $data['file_name'];
            $datos['fid_campana']=$this->input->post('txtnombrecampana');
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



              $this->MModificarContenido->editarEnlace($id,$datos);

                  // $this->load->view('generadores/vUploadContenido',$data);




        }

    
}   
