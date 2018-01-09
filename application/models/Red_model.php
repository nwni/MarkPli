<?php 
/**
* 
*/
class Red_model extends CI_Model {
	function __construct() {
		parent::__construct();
    } 
    
    function getTypes(){
        $sql = "SELECT (SELECT count(TipoPublicacion) FROM posts WHERE TipoPublicacion = 1) AS `UNO`,
        (SELECT count(TipoPublicacion) FROM posts WHERE TipoPublicacion = 2) AS `DOS`,
        (SELECT count(TipoPublicacion) FROM posts WHERE TipoPublicacion = 3) AS `TRES`,
        (SELECT count(TipoPublicacion) FROM posts WHERE TipoPublicacion = 4) AS `CUATRO`,
        (SELECT count(TipoPublicacion) FROM posts WHERE TipoPublicacion = 5) AS `CINCO`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}