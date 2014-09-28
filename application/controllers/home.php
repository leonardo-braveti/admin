<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function agenda(){
		$this->load->model("agenda_model");
		$dados = array("dados" => $this->agenda_model->carregar());
		$this->load->view("home/agenda", $dados);
	}

	public function fotos(){
		$this->load->model("fotos_model");
		$dados = array("dados" => $this->fotos_model->carregar());
		$this->load->view("home/fotos", $dados);

	}

	public function contato(){
		$this->load->view('home/contato');
	}
	public function tocaai(){
		$this->load->view('home/tocaai');
	}

	
	public function cadastrar_agenda(){		
		/* carrega o helper para usar getData() e doUpload() */
		$this->load->helper("brave_helper");

		/*upload da imagem para o HD */
		$imagem = $_FILES['imagem']['name'];
		doUpload($imagem);

		$dados = array(
				"atracao" => $this->input->post("atracao"),
				"data" => $this->input->post("datepicker"),
				"hora" => $this->input->post("hora"),
				"postos" => $this->input->post("pvendas"),
				"informacao" => $this->input->post("info"),
				"imagem" => $imagem
		);
		$this->load->model("agenda_model");
		$this->agenda_model->salvar($dados);
		Home::agenda();
	}

	
}

