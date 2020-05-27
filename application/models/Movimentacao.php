<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao extends CI_Model {

    public function insert($movimentacao){
        $this->db->insert('t_transacao', $movimentacao);
    }	
    
    public function getMovimentacoes(){
        return $this->db->get('t_transacao')->result();
    }

    public function excluir($movimentacao_id){
        $this->db->where('id', $movimentacao_id);
        $this->db->delete('t_transacao');
    }

    public function buscarPorCodigo($movimentacao_id){
        $this->db->where('id', $movimentacao_id);
        return $this->db->get('t_transacao')->row();
    }
    
    public function atualizar($movimentacao_id, $movimentacao){
        $this->db->where('id', $movimentacao_id);
        $this->db->update('t_transacao', $movimentacao);

        if($this->db->affected_rows() >0){
            return true;
        }else{
            return false;
        }
    }
}