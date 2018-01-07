<?php 
/**
* 
*/
class Post_model extends CI_Model {
	function __construct() {
		parent::__construct();
	} 


	// User index 
	//If the function is called w/o a parameter returns all the items
	//If it receives one, returns the information of that index
    function getRows($id = ""){
        if(!empty($id)){
        	$sql = "SELECT p.id_post, cam.nombre_campana, con.nombre_contenido, p.descripcion, p.tipo, p.tags, p.hashtags, con.link_img, p.fecha_publicar, p.estado
						FROM posts p
						INNER JOIN contenidos con
						ON p.fid_contenido = con.id_contenido
						INNER JOIN campanas cam
						ON con.fid_campana = cam.id_campana
						WHERE p.id_post = ?
						ORDER BY p.id_post ASC";
            $query = $this->db->query($sql, array($id));
            return $query->result_array();
        }else{
            //$query = $this->db->get('posts');
            $sql = "SELECT p.id_post, cam.nombre_campana, con.nombre_contenido, p.descripcion, p.tipo, p.tags, p.hashtags, con.link_img, p.fecha_publicar, p.estado
						FROM posts p
						INNER JOIN contenidos con
						ON p.fid_contenido = con.id_contenido
						INNER JOIN campanas cam
						ON con.fid_campana = cam.id_campana
						ORDER BY p.id_post ASC";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
    }	

    function updateState($id, $state){
    	//$a = "je" + "'" + $state + "'" + "je";
    	// $sql = "UPDATE posts SET estado = 'aceptado' WHERE id_post = " . $id;
	//$sql = "UPDATE posts SET estado = " + "'" + $state + "'" + " WHERE id_post = " . $id;    	
    	$sql = "UPDATE posts SET estado = " . "'" . $state . "'" . " WHERE id_post = " . $id;    	
    	$query = $this->db->query($sql);
    	//return $query->result_array();
	}
	
    function deletePost($id){   	
    	$sql = "DELETE FROM posts WHERE id_post = " . "'" . $id . "'";    	
    	$query = $this->db->query($sql);
    	//return $query->result_array();
    }	

	// function search() {
	// 	$queryBus=$this->db->get('posts');
	// 	if ($queryBus->num_rows()>0) {
	// 		return $queryBus;
	// 	}else {
	// 		 $queryBus=FALSE;
	// 		return  $queryBus;
	// 	}
	// }


	function upload($data) {
		//echo $data;
		
		//$this->db->get_where('posts', );
	}
}