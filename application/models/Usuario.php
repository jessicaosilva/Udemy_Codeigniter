<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

    public function insert($usuario){
        $this->db->insert('t_usuario', $usuario);
        return $this->db->insert_id();
    }	
}