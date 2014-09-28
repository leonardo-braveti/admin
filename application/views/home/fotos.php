<!DOCTYPE html>
<html lang="pt">
	<head>
		
		<title>Lotus :: Sistema de Administração da Homepage</title>

		<!-- Correção dos caracteres especiais (ç | ã ...) -->
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

		<!-- Glisse CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/glisse.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/app.css'); ?>">
		<!-- BootStrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
		<!-- JQuery UI CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.min-redmond.css') ?>">						
		<!-- Brave CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/fotos.css'); ?>">		

		<!-- JQuery JS -->
		<script src="<?php echo base_url('js/jquery-2.1.1.min.js'); ?>"></script>
		<!-- Glisse JS -->
		<script src="<?php echo base_url('js/glisse_brave.js'); ?>"></script>	
		<!-- JQuery UI -->
		<script src="<?php echo base_url('js/jquery-ui.min.js'); ?>"></script>
		<!-- BootStrap JS -->
		<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>		
		<!-- Brave JS -->
		<script src="<?php echo base_url('js/brave_fotos.js'); ?>"></script>	
			
	</head>

	<body>
		
		<div id="tudo">
			<div id="tudo">

			<div id="topo">
				<?php 
					include_once("topo.php");
				?>				
			</div>
			<p> Fotos de eventos cadastradas no sistema </p>	
			<div id="imagens">
							
				
						<?php						
							
							foreach ($dados as $chave => $item) {
								if(count($item) == 0)
									continue;	

									/*** 
										este trecho de codigo pega o id_evento da foto e busca o respectivo nome 
										no array evento para colocar do atributo data-count
									***/
									foreach ($eventos as $value) {     
										if($chave == $value['id']){											
											echo "<ul class='stack' data-count=".$value['atracao'].">";   
										}  							
									}
									// *** fim do código 
									
									// *** este codigo coloca as imagens na tela, agrupadas pelo glisse *** //
									
									foreach ($item as $value){
										$path_img = base_url("uploads/".$value['nome']);
										$path_del = "fotos/excluir_fotos/".$value['id'];
									
										$evento = $value['evento'];									
										echo "<li>
												<img src=".$path_img." rel=".$chave." data-glisse-big=".$path_img." class='pics' />
											<li>";									
									}
									echo "</ul>";
									// ********** fim do código
								}							
						?>
					
			</div>
			<br>
			<p>_____________________________________________________________________________<p>
			<div id="corpo">
				<form id="" action="<?php echo site_url('fotos/cadastrar_fotos'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">					
          			<div class="form-group"> 
          				<div class="col-lg-12 estilo_select" >
              				<select id="eventos" name="evento" class="form-control">
              					<?php
              						foreach ($eventos as $value) {              							
										echo "<option value=".$value['id'].">".$value['atracao']."</option>";
									}
              					?>

              				</select>
            			</div>
            			<br><br><br>
          				<div class="col-lg-12">
              				<input type="file" id="imagem" name="imagem">
            			</div>
            			<br><br>
            			<div class="col-lg-12">
            				<input type="submit" value="Enviar Foto" class="btn btn-success">
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
			
		
		</div>
	</body>
</html>