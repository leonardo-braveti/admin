<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Lotus :: Sistema de Administração da Homepage</title>

		<!-- Correção dos caracteres especiais (ç | ã ...) -->
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		
		<!-- BootStrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
		<!-- JQuery UI CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.min-redmond.css') ?>">				
		<!-- Brave CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/agenda.css'); ?>">

		<!--<link rel="stylesheet" href="<?php echo base_url('css/datatables.css'); ?>">-->

		<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
		
		

		 <!-- JQuery -->
		<script src="<?php echo base_url('js/jquery-2.1.1.min.js'); ?>"></script>
		<!-- JQuery UI -->
		<script src="<?php echo base_url('js/jquery-ui.min.js'); ?>"></script>
		<!-- BootStrap JS -->
		<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		<!-- Brave JS -->
		<script src="<?php echo base_url('js/brave_agenda.js'); ?>"></script>
		<!-- FileStyle JS -->
		<script src="<?php echo base_url('js/filestyle.min.js'); ?>"></script>

		<script src="<?php echo base_url('js/datatables.js'); ?>"></script>
		<script src="<?php echo base_url('js/datatables.jqueryui.js'); ?>"></script>
			
	</head>

	<body>
		
		<div id="tudo">

			<div id="topo">
				<?php 
					include_once("topo.php");
				?>				
			</div>

			

			<div id="rodape">
				<img src=<?php echo base_url("img/brave.png") ?> /> &nbsp&nbsp&nbsp
				<img src=<?php echo base_url("img/parceiro_taveira2.png") ?> />
				<p>© 2014 Lotus. Todos os direitos reservados.</p>
			</div>
		
		</div>
	</body>
</html>