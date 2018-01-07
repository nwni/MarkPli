<?php 


class mupload extends CI_Model
{
	


	public function setImagen($datos){

		$campos = array(
			'nombre_contenido' =>$datos['nombre_contenido'] ,
			//'nombre_imagen' =>$datos['nombre_imagen'] ,
			'link_img' =>$datos['link_img'] ,
			'tipo' =>$datos['tipo'] ,
			'fid_campana' =>$datos['fid_campana'],
			'fid_generador' =>$datos['fid_generador']);
			

		//sentecia para insertar en la base de datos
		$this->db->insert('contenidos',$datos);

		//mandar la vista
		//$this->load->view('vUploadContenido');
		 //mostrar la vista correcta
	}
}
       
	