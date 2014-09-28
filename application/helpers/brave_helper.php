<?php 

	function getData(){
		$ci=& get_instance();
		$ci->load->helper('date');		
		$datestring = "%Y-%m-%d";
		$time = time();
		return mdate($datestring, $time);
	}
	function formatarDataMySQL($data){		
 		$partes = explode("/",$data );
 		$dia = $partes[0];
 		$mes = $partes[1];
 		$ano = $partes[2];

 		return $ano."-".$mes."-".$dia;
	}

	function formatarDataView($data){		
 		$partes = explode("-",$data );
 		$ano = $partes[0];
 		$mes = $partes[1];
 		$dia = $partes[2];

 		return $dia."/".$mes."/".$ano;
	}


	function doUpload($i,$mode=false){
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';						 
		$config['file_name'] = utf8_decode($i);	
		if($mode){					 
			$config['file_name'] = sha1($config['file_name']+time());
		}
		$config['max_size'] = 0;						
		$config['max_width'] = 0;			
		$config['max_heigth'] = 0;	
		$ci=& get_instance();		
		$ci->load->library('upload', $config);		
		$ci->upload->do_upload("imagem");			

		return($ci->upload->file_name);
	}

?>