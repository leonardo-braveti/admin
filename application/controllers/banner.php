<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function index(){
		$this->load->model("banner_model");
		$dados = array("imagens" => $this->banner_model->carregar());
		$this->load->view("home/banner", $dados);
	}

	public function cadastrar_banner(){
		/* carrega o helper para usar getData() e doUpload() */
		$this->load->helper("brave_helper");
		
		/*upload da imagem para o HD */
		$imagem = $_FILES['imagem']['name'];
		doUpload($imagem);

		$dados = array(
			"nome" => $imagem,
			"data" => getData()
		);	

		$this->load->model("banner_model");
		$this->banner_model->salvar($dados);
		Banner::index();
	}

	public function excluir_banner($id){
		$this->load->model("banner_model");
		$this->banner_model->excluir($id);
		Banner::index();
	}
}