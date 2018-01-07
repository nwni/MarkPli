<?php 
/**
* 
*/
class Mlogin extends CI_Model
{


	  function getCliente($nick_usuario,$contrasena_usuario){
       $this->db->where('nick_usuario',$nick_usuario);
       $this->db->where('contrasena_usuario',$contrasena_usuario);
       $query = $this->db->get('usuarios');

       return $query->result();
    }

	public function ingresar($usu,$pass){
		$this->db->select('u.id_usuario,u.nick_usuario,u.tipos_usuarios');
		$this->db->from('usuarios u');
		$this->db->where('u.nick_usuario',$usu);
		$this->db->where('u.contrasena_usuario',$pass);

		$resultado= $this->db->get();
//var_dump($resultado);
		if ($resultado->num_rows() == 1) {

			$r=$resultado ->row();
			//guardar el tipo de usuario
			$stu=$r->tipos_usuarios;

			//datos de sesion

			$s_datos = array(
			 	's_idusuario' => $r->id_usuario ,
			 	's_usuarios' =>$r->nick_usuario
			 );


			$this->session->set_userdata($s_datos);
				$this->session->set_userdata($s_datos);

			if ($stu=='1') {
			return 1;
		}
			if ($stu=='2') {
			return 2;
		}
			if ($stu=='3') {
			return 3;
		}
			
		}else{
			return 0;
		}

	
	}
}