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
		<link rel="stylesheet" href="<?php echo base_url('css/banner.css'); ?>">

		<link rel="stylesheet" href="<?php echo base_url('css/datatables.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/datatables.jqueryui.css'); ?>">
		

		 <!-- JQuery -->
		<script src="<?php echo base_url('js/jquery-2.1.1.min.js'); ?>"></script>
		<!-- JQuery UI -->
		<script src="<?php echo base_url('js/jquery-ui.min.js'); ?>"></script>
		<!-- BootStrap JS -->
		<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		<!-- Brave JS -->
		<script src="<?php echo base_url('js/brave_banner.js'); ?>"></script>
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
			<p> Imagens em uso no momento </p>	
			<div id="imagens">
							
				<table>
					<tr>
						<?php
							$x = 1;
							foreach ($imagens as $value) {
								$path_img = base_url("uploads/".$value['nome']);
								$path_del = "banner/excluir_banner/".$value['id'];
								echo "<td><a href=".site_url($path_del)."><img src=".$path_img."></a></td>";								
							}
							
						?>
					</tr>
				</table>
			</div>
			<br>
			<div id="corpo">
				<form id="" action="<?php echo site_url('banner/cadastrar_banner'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">					
          			<div class="form-group"> 
          				<div class="col-lg-12">
              				<input type="file" id="imagem" name="imagem">
            			</div>
            			<br><br>
            			<div class="col-lg-12">
            				<input type="submit" value="Enviar Banner" class="btn btn-success">
            			</div>
          			</div>
				</form>	
			</div>

			<div id="rodape">
				<img src=<?php echo base_url("img/brave.png") ?> /> &nbsp&nbsp&nbsp
				<img src=<?php echo base_url("img/parceiro_taveira2.png") ?> />
				<p>© 2014 Lotus. Todos os direitos reservados.</p>
			</div>
		
		</div>
	</body>
</html>