<?php
class consultas extends CI_Model {

  public function __construct(){
    $this->load->database();
  }
//obtener el numero de cliente para insertar en la campaña
  public function obcampanas(){
     $this->db->select('id_cliente');
    $this->db->from('clientes');
    $this->db->join('clientes_usuarios', 'clientes.id_cliente = clientes_usuarios.fid_cliente');
    //$this->db->where('fid_cliente','id_cliente');
      // $query = $this->db->get('usuarios');
       
      $resultado = $this->db->get();
      return $resultado->result();

      }


// public function obteneridcliente(){

//     $this->db->select('id_usuario');
//     $this->db->from('usuarios');
//     $this->db->join('clientes_usuarios', 'usuarios.id_cliente = clientes_usuarios.fid_cliente');
//     //$this->db->where('fid_cliente','id_cliente');
//       // $query = $this->db->get('usuarios');
       
//       $resultado = $this->db->get();
//       return $resultado->result();

//       }
//  }

}
//, nombre_cliente,apellido_cliente, nombre_negocio,
//fid_cliente,fid_tipos_usuarios