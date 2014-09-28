<?php
	class Banner_Model extends CI_Model{

		public function salvar($data){
			$this->db->insert('banner', $data); 			
		}

		public function carregar(){
			return $this->db->get("banner")->result_array();		
		}		
		
		public function excluir($id){
			$this->db->where("id",$id);
			$this->db->delete("banner"); 	

			/* excluir imagem do sistema */
			@unlink("../uploads/$nome");

		}
	}
?>