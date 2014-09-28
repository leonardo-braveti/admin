<?php
	class Som_Model extends CI_Model{

		public function registrar($data){
			$this->db->insert('som', $data); 			
		}

		public function carregar(){
			return $this->db->get("som")->result_array();		
		}		

		public function excluir($id){
			$this->db->where("id",$id);
			$this->db->delete("som"); 	
		}
	}
?>