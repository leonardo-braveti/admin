<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fotos extends CI_Controller {

	public function index(){
		$this->load->model("fotos_model");
		$this->load->model("agenda_model");	
		$dados = array("dados" => $this->fotos_model->carregarPorEvento(),"eventos"=>$this->agenda_model->getEventos());
		$this->load->view("home/fotos", $dados);

	}



	public function cadastrar_fotos(){
		/* carrega o helper para usar getData() e doUpload() */
		$this->load->helper("brave_helper");
		
		/*upload da imagem para o HD */
		$imagem = $_FILES['imagem']['name'];
		$imagem = doUpload($imagem, true);

		$dados = array(
			"nome" => $imagem,
			"data" => getData(),
			"evento" => $this->input->post("evento")
		);	

		$this->load->model("fotos_model");
		$this->fotos_model->salvar($dados);
		Fotos::index();		
	}
	public function excluir_bynome($nome){
		echo $nome;
		$this->load->model("fotos_model");
		$this->fotos_model->excluir_bynome($nome);
		//Fotos::index();
	}
}
