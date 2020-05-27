<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MovimentacaoController extends CI_Controller {

	public function formCadastroMovimentacao(){
        $this->load->helper('form');
        return $this->load->view('movimentacao/cadastrar_movimentacao');
    }

    public function inserirMovimentacao(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required|numeric');
        $this->form_validation->set_rules('data', 'Data', 'required');
        if($this->form_validation->run()==false){
            return $this->load->view('movimentacao/cadastrar_movimentacao');

        }else{
            $this->load->model('Movimentacao', 'movimentacao', true);

            $data =[
                'descricao'=> $this->input->post('descricao'),
                'tipo'     => $this->input->post('tipo'),
                'valor'    => $this->input->post('valor'),
                'data'     => $this->input->post('data'),
                'datahora_cadastro'     => date('Y-m-d H:i:s'),
            ];
            $this->movimentacao->insert($data);
            echo 'dados inseridos com sucesso.';
        }
    }
    
    public function listarMovimentacoes(){
        $this->load->model('Movimentacao', 'movimentacao', true);
        $dados['lista_movimentacoes'] = $this->movimentacao->getMovimentacoes();
       
        return $this->load->view('movimentacao/listar_movimentacoes', $dados);

    }

    public function excluiMovimentacao($movimentacao_id){
        $this->load->model('Movimentacao', 'movimentacao', true);
        $this->movimentacao->excluir($movimentacao_id);
        redirect(base_url('movimentacoes'));
    }
}
