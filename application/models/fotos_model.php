<?php
	class Fotos_Model extends CI_Model{

		public function salvar($data){
			$this->db->insert('fotos', $data); 			
		}

		public function carregar(){
			return $this->db->get("fotos")->result_array();		
		}		
		public function carregarPorEvento(){
			// ****** gerando array de eventos ******
			$this->load->model("agenda_model");	
			$e = $this->agenda_model->getEventos();
			$eventos = array();
			foreach ($e as $value) {
				array_push($eventos, $value['id']);
			}
			// ****** array $eventos gerado ***** 


			$imagens = $this->db->get("fotos")->result_array();

			$array_final = array();
			$r = array();
			foreach ($eventos as $ev) {
				$temp = array();
				foreach ($imagens as $im) {	
					//echo $ev." - ".$im['evento']."<br>";			
					if($ev == $im['evento'])
						array_push($temp, $im);					
					//echo $im['evento']." - ".$im['nome']."<br>";
				}	
				
				$array_final[$ev] = $temp;
			}
			return $array_final;
			echo "<br><br><br><br>";
			//print_r($array_final);
			
		}
		
		public function excluir(){			
			$this->db->where("id",$id);
			$p = $this->db->get("fotos")->row();	

			$nome = $p->nome;
			echo $nome;
			$this->db->where("id",$id);
			$this->db->delete("fotos"); 	

			//excluir imagem do sistema 
			
			unlink(base_url("uploads/$nome"));

		}

		public function excluir_bynome($nome){
			$this->db->where("nome",$nome);
			$this->db->delete("fotos"); 
			unlink(base_url("uploads/$nome"));
		}
	}
?>