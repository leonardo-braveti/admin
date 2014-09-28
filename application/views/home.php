<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Lotus :: Sistema de Administração da Homepage</title>

		<!-- Correção dos caracteres especiais (ç | ã ...) -->
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		
		<!-- BootStrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">			
		<!-- Brave CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/home.css'); ?>">

		

		 <!-- JQuery -->
		<script src="<?php echo base_url('js/jquery-2.1.1.min.js'); ?>"></script>

		<!-- BootStrap JS -->
		<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
	 	
		
		<script>
			$(document).ready(function(){
									
			});
		</script>
	
	</head>

	<body>
		
		<div id="tudo">

			<div id="topo">
				<?php 
					include_once("home/topo.php");
				?>				
			</div>

			<div id="corpo">
			
			</div>

			<div id="rodape">
				<img src=<?php echo base_url("img/brave.png") ?> /> &nbsp&nbsp&nbsp
				<img src=<?php echo base_url("img/parceiro_taveira2.png") ?> />
				<p>© 2014 Lotus. Todos os direitos reservados.</p>
			</div>
		
		</div>
	</body>
</html>