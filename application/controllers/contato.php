<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index(){
		$this->load->model("contato_model");
		$dados = array("dados" => $this->contato_model->carregar());
		$this->load->view("home/contato", $dados);
	}
	public function registrar(){
		$nome = $this->input->post("camponome");
		$whatsapp = $this->input->post("campozap");
		$email = $this->input->post("campomail");
		$telefone = $this->input->post("campotel");
		$cidade = $this->input->post("campocidade");
		$mensagem = $this->input->post("campomensagem");

		$this->load->model("contato_model");

		$dados = array(
			"nome" => $nome,
			"email" => $email,
			"telefone" => $telefone,
			"cidade" => $cidade,
			"whatsapp" => $whatsapp,
			"mensagem" => $mensagem
			);
		$this->contato_model->registrar($dados);
		echo "Gravou";
		
	}
}
