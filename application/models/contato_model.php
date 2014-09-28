<?php
	class Contato_Model extends CI_Model{

		public function registrar($data){
			$this->db->insert('contato', $data); 			
		}

		public function carregar(){
			return $this->db->get("contato")->result_array();		
		}		

		public function excluir($id){
			$this->db->where("id",$id);
			$this->db->delete("contato"); 	
		}
	}
?>