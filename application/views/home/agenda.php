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

			<div id="seletor">
				<button id="mostra_form"  type="button" class="btn btn-warning">Novo Evento </button>
			</div>
			<img id="fotinho"/>

			<div id="corpo">
				<form id="form_agenda" action="<?php echo site_url('agenda/cadastrar_agenda'); ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">            			         	
              				<input type="hidden" class="form-control" id="chave" name="chave">            			
          			</div>
				 
					<div class="form-group">
            			<label class="control-label">Evento</label>            	
              			<input type="text" class="form-control" id="atracao" name="atracao" placeholder="Informe o nome do cantor ou do grupo">            			
          			</div>
          			<div class="form-group">
            			<label class="control-label">Data</label>            			
              			<input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Escolha a data do evendo" >            			
          			</div>
          			<div class="form-group">
            			<label class="control-label">Horário</label>
            			<input type="text" class="form-control" id="hora" name="hora" placeholder="Informe a hora do evento">            			
          			</div>
          			<div class="form-group">
            			<label class="control-label">Pontos de Venda</label>
            			<input type="text" class="form-control" id="pvendas" name="pvendas" placeholder="Informe os locais de venda de ingressos">            			
          			</div>
          			<div class="form-group">
            			<label class="control-label">Informações</label>
            			<textarea class="form-control" id="info" name="info" placeholder="Registre informações relevantes sobre o evento"></textarea>            			
          			</div>
          			<div class="form-group">
            			<label class="control-label"></label>
            			<input type="file" id="imagem" name="imagem"> 
          			</div>
          			<div class="form-group">
            			<input type="submit" id="submeter" class="btn btn-success" value="Cadastrar">
           			</div>
				</form>

			
			</div>
			<div id="ultimos_eventos">			
				
				<table  id="eventos" border=1 class="hover" >
					
					<tbody>
						<?php
							$this->load->helper('brave_helper');
							foreach ($dados as $value) {								
								echo "<tr class=myline id=l".$value['id'].">";
									echo "<td>".$value['id']."</td>";
									echo "<td>".$value['atracao']."</td>";
									echo "<td>".formatarDataView($value['data'])."</td>";
									echo "<td>".$value['hora']."</td>";
									echo "<td>".$value['postos']."</td>";
									echo "<td>".$value['informacao']."</td>";	
									echo "<td>".$value['imagem']."</td>";								
									echo "<td>
										
											<a class=editar href=#>
												Editar
											</a>
										<br>
											<a class=apagar href=".site_url('agenda/excluir/'.$value['id']).">
												Apagar
											</a>
										
									</td>";						
								echo "</tr>";
							}						
						?>
					<tbody>
				</table>
				<br><br>
			</div>

			<div id="rodape">
				<img src=<?php echo base_url("img/brave.png") ?> /> &nbsp&nbsp&nbsp
				<img src=<?php echo base_url("img/parceiro_taveira2.png") ?> />
				<p>© 2014 Lotus. Todos os direitos reservados.</p>
			</div>
		
		</div>
	</body>
</html>