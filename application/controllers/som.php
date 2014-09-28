<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Som extends CI_Controller {

	public function index(){
		$this->load->model("som_model");
		$dados = array("dados" => $this->contato_model->carregar());
		$this->load->view("home/som", $dados);
	}
	public function registrar(){
		$nome = $this->input->post("camponome");
		$email = $this->input->post("email");
		$cidade = $this->input->post("cidade");
		$artista = $this->input->post("artista");
		$musica = $this->input->post("musica");
		$link = $this->input->post("link");

		$this->load->model("som_model");

		$dados = array(
			"nome" => $nome,
			"email" => $email,
			"cidade" => $cidade,
			"artista" => $artista,
			"musica" => $musica,
			"link" => $link
			);
		$this->som_model->registrar($dados);
		
	}
}
