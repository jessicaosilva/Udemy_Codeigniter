<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrimeiraController extends CI_Controller {

	public function primeiroMetodo()
	{
		$dados['titulo']= "Título Primeira view";
		$this->load->view('primeira_view', $dados);
	}
}
