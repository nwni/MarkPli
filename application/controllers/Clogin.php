<?php defined ('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Clogin extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
		$this->load->database();
		  $this->load->model('mupload');
          $this->load->model('Mlista');
       
          }
	

	public function index()
	{
		
				//	$this->load->view('core/header');
            //$this->load->view('community/community_view');
    $this->load->view('ingresar');
    //$this->load->view('core/footer');
	}

	public function Salir(){
		$this->load->view('core/header');
            $this->load->view('vlogin');
    //$this->load->view('community/community_view');
    $this->load->view('core/footer');
	
		//$this->session->sess_destroy();

	
		}



	public function ingresar()
	{
		$usu = $this-> input-> post('txtusuario');
		$pass = $this-> input-> post('txtcontrasena');
//var_dump($usu);
//var_dump($pass);
		$res= $this->mlogin->ingresar($usu,$pass);
	
			
		if ($res==1) 
		{	

			//$this->session->set_userdata('nick',$res[0]->nick_usuario);
        	//$result=$this->Mlista->listaC();
       		 //$data= array('result'=>$result);
			$this->load->view('core/header');
   			$this->load->view('community/community_view');
    		$this->load->view('core/footer');

		}
		else
		{
			if ($res==2) {
				$this->load->view('core/header_cm');
   				$this->load->view('community/campanas_view');
    			$this->load->view('core/footer');
			}else{

				if ($res==3) {
					//vista de memo
				}else{
							// $this->load->view('core/header');
            //$this->load->view('vlogin');
    //$this->load->view('community/community_view');
    		//$this->load->view('core/footer');

				}
			}
		
		
		}
	}


	function valida(){
		$this->load->model('Mlogin');
        $nick_usuario = $this->input->post('IngresarU');
        $contrasena_usuario = ($this->input->post('ConstraseaIngreU'));

        $res = $this->Mlogin->getCliente($nick_usuario,$contrasena_usuario);

        if($res == null){

        	$this->load->view('ingresar');

            $this->session->set_userdata('id_usuario',$res[0]->id_usuario);
            $this->session->set_userdata('tipo_usuario_nombre',$res[0]->tipo_usuario_nombre);
            $this->session->set_userdata('tipos_usuarios',$res[0]->tipos_usuarios);


        }
        else{
        	if($res[0]->tipos_usuarios==1){
                  $this->session->set_userdata('id_usuario',$res[0]->id_usuario);
        	$this->session->set_userdata('tipo_usuario_nombre',$res[0]->tipo_usuario_nombre);
        	$this->session->set_userdata('tipos_usuarios',$res[0]->tipos_usuarios);
        	
        	$this->load->view('core/header');
   			$this->load->view('community/community_view');
    		$this->load->view('core/footer');

       
        	
        	}else{
        		if ($res[0]->tipos_usuarios==2) {
  $this->session->set_userdata('id_usuario',$res[0]->id_usuario);
        			$this->session->set_userdata('tipo_usuario_nombre',$res[0]->tipo_usuario_nombre);
        	$this->session->set_userdata('tipos_usuarios',$res[0]->tipos_usuarios);
        	$this->load->view('core/header_cm');
   			$this->load->view('community/community_view');
    		$this->load->view('core/footer');

        	
        			
        		}else{

        			if ($res[0]->tipos_usuarios==3) {
                          $this->session->set_userdata('id_usuario',$res[0]->id_usuario);
        		$this->session->set_userdata('tipo_usuario_nombre',$res[0]->tipo_usuario_nombre);
        	$this->session->set_userdata('tipos_usuarios',$res[0]->tipos_usuarios);
        	$this->load->view('core/header_uplo');
   			$this->load->view('community/community_view');
    		$this->load->view('core/footer');

        	
        				
        			}else{
        				redirect('Clogin');

        			}        			
        		}
        		
        	}
        }
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Clogin');
	}
}

