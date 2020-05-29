<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MovimentacaoController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Movimentacao', 'movimentacao', true);
    }

	public function formCadastroMovimentacao(){
        return $this->load->view('movimentacao/cadastrar_movimentacao');
    }

    public function inserirMovimentacao(){
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required|numeric');
        $this->form_validation->set_rules('data', 'Data', 'required');
        if($this->form_validation->run()==false){
            return $this->load->view('movimentacao/cadastrar_movimentacao');

        }else{
            
            $config['upload_path']    = './uploads/comprovantes/';
            $config['allowed_types']  = 'gif|jpg|png|pdf';
            $this->upload->initialize($config);
            
            $data =[
                'descricao'           => $this->input->post('descricao'),
                'tipo'                => $this->input->post('tipo'),
                'valor'               => $this->input->post('valor'),
                'data'                => $this->input->post('data'),
                'datahora_cadastro'   => date('Y-m-d H:i:s'),
            ];

            if(!$this->upload->do_upload('comprovante')){
                $errors = $this->upload->display_errors();
                $this->session->set_flashdata('cadastro-movimentacao', $errors);
                redirect(base_url('movimentacao/cadastrar'));

            }else{
                $dados_upload = $this->upload->data();
                $filename = $dados_upload['file_name'];
                $data['arquivo_comprovante'] = $config['upload_path'] . $filename;
            }

            $this->movimentacao->insert($data);
            redirect(base_url('movimentacoes'));
        }
    }
    
    public function listarMovimentacoes(){
        
        $dados['lista_movimentacoes'] = $this->movimentacao->getMovimentacoes();
       
        return $this->load->view('movimentacao/listar_movimentacoes', $dados);

    }

    public function excluiMovimentacao($movimentacao_id){

        $movimentacao = $this->movimentacao->buscarPorCodigo($movimentacao_id);
        if(!is_null($movimentacao))
        {
            $this->movimentacao->excluir($movimentacao_id);
            if(!empty($movimentacao->arquivo_comprovante) && !is_null($movimentacao->arquivo_comprovante)){
                unlink($movimentacao->arquivo_comprovante);
            }
            $this->session->set_flashdata('listar-movimentacao', 'Movimentação excluída com sucesso.');
        }else{
            $this->session->set_flashdata('listar-movimentacao', 'Não existe esse registro no banco de dados.');

        }
        
        redirect(base_url('movimentacoes'));
    }
    
    public function editarMovimentacao($movimentacao_id){
        
        $dados['movimentacao'] = $this->movimentacao->buscarPorCodigo($movimentacao_id);
        $this->load->view('movimentacao/editar_movimentacao', $dados);
    }

    public function salvarMovimentacao($movimentacao_id){
        
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required|numeric');
        $this->form_validation->set_rules('data', 'Data', 'required');
        if($this->form_validation->run()===false){
            $this->editarMovimentacao($movimentacao_id);
        }else{
            
            $config['upload_path']    = './uploads/comprovantes/';
            $config['allowed_types']  = 'gif|jpg|png|pdf';
            $this->upload->initialize($config);

            $movimentacao =[
                'descricao'=> $this->input->post('descricao'),
                'tipo'     => $this->input->post('tipo'),
                'valor'    => $this->input->post('valor'),
                'data'     => $this->input->post('data'),
                'datahora_ultimaalteracao'=> date('Y-m-d H:i:s'),
            ];
            if(!empty($_FILES['comprovante']['name']))
            {
                if(!$this->upload->do_upload('comprovante'))
                {
                    $errors = $this->upload->display_errors();
                    $this->session->set_flashdata('edicao-movimentacao', $errors);
                    redirect(base_url("movimentacoes/editar/{$movimentacao_id}"));
    
                }else{
                    $dados_upload = $this->upload->data();
                    $filename = $dados_upload['file_name'];
                    $movimentacao['arquivo_comprovante'] = $config['upload_path'] . $filename;
                }
            }
           

            $alteracao = $this->movimentacao->atualizar($movimentacao_id, $movimentacao);
            if($alteracao)
            {
                $this->session->set_flashdata('edicao-movimentacao', 'Dados alterados com sucesso.');
            }else{
                $this->session->set_flashdata('edicao-movimentacao', 'Erro ao alterar os dados da movimentação.');
            }
        }
        redirect(base_url("movimentacoes/editar/{$movimentacao_id}"));
    }
}
