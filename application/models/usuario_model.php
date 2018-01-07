<?php

class usuario_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

    function nuevo($datos){
       $this->db->insert('usuarios',$datos);
    }
    function getUsuarios(){
       return $this->db->select("*")->from("usuarios")->get()->result();
    }
    public function get_usuario($id){
      return $this->db->select('*')->from('usuarios')->where('id_usuario',$id)->get()->result();
    }
    public function actualizarusu($id,$name,$contra,$tipo){
      return $this->db->set("nick_usuario",$name)->set("contrasena_usuario",$contra)
         ->set("tipo_usuario_nombre",$tipo)
         ->where("id_usuario",$id)
         ->update("usuarios");
    }
    public function eliminar($id){
      return $this->db->where("id_usuario",$id)->delete("usuarios");
    } 
}

?>