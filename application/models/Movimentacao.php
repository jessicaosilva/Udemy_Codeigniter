<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao extends CI_Model {

    public function insert($movimentacao){
        $this->db->insert('t_transacao', $movimentacao);
    }
}