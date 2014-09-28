<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function index(){
		$this->load->model("agenda_model");
		$dados = array("dados" => $this->agenda_model->carregar());
		$this->load->view("home/agenda", $dados);
	}

	public function cadastrar_agenda(){		
		/* carrega o helper para usar getData() e doUpload() */
		$this->load->helper("brave_helper");

		/*upload da imagem para o HD */
		$imagem = $_FILES['imagem']['name'];
		doUpload($imagem);

		$this->load->helper('brave_helper');
		$data_certa = formatarDataMySQL($this->input->post("datepicker"));

		$dados = array(
				"atracao" => $this->input->post("atracao"),
				"data" => $data_certa,
				"hora" => $this->input->post("hora"),
				"postos" => $this->input->post("pvendas"),
				"informacao" => $this->input->post("info"),
				"imagem" => $imagem
		);
		$this->load->model("agenda_model");
		$this->agenda_model->salvar($dados);
		Agenda::index();
	}

	public function atualizar(){

		$imagem = $_FILES['imagem']['name'];

		$this->load->helper('brave_helper');
		$data_certa = formatarDataMySQL($this->input->post("datepicker"));


		if($imagem!=""){		
			doUpload($imagem);
			$dados = array(
				"atracao" => $this->input->post("atracao"),
				"data" => $data_certa,
				"hora" => $this->input->post("hora"),
				"postos" => $this->input->post("pvendas"),
				"informacao" => $this->input->post("info"),
				"imagem" => $imagem
			);
		}
		else{
			$dados = array(
				"atracao" => $this->input->post("atracao"),
				"data" => $data_certa,
				"hora" => $this->input->post("hora"),
				"postos" => $this->input->post("pvendas"),
				"informacao" => $this->input->post("info")
			);
		}

		$this->load->model("agenda_model");		
		$this->agenda_model->atualizar($this->input->post("chave"), $dados);
		Agenda::index();
	}

	public function excluir($id){
		$this->load->model("agenda_model");
		$this->agenda_model->excluir($id);
		Agenda::index();
	}

	
}

