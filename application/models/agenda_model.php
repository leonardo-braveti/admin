<?php
	class Agenda_Model extends CI_Model{

		public function salvar($data){
			$this->db->insert('agenda', $data); 			
		}

		public function carregar(){
			return $this->db->get("agenda")->result_array();		
		}		

		public function getEventos(){
			$this->db->select('id, atracao');
			$this->db->group_by("atracao");
			return $this->db->get("agenda")->result_array();		
		}

		public function atualizar($id, $data){
			$this->db->where("id",$id);
			$this->db->update("agenda", $data); 			
		}
		
		public function excluir($id){
			/*$this->db->where("id",$id);
			$p = $this->db->get("agenda")->row();			
			$nome = $p->foto;*/

			$this->db->where("id",$id);
			$this->db->delete("agenda"); 	

			/* excluir imagem do sistema */
			//@unlink("../uploads/$nome");

		}
	}
?>