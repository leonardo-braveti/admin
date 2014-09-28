<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Lotus :: Sistema de Administração da Homepage</title>

		<!-- Correção dos caracteres especiais (ç | ã ...) -->
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		
		<!-- BootStrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
		<!-- BootStrapValidator CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrapValidator.min.css') ?>">	
		<!-- Brave CSS -->
		<link rel="stylesheet" href="<?php echo base_url('css/base.css'); ?>">

		

		 <!-- JQuery -->
		<script src="<?php echo base_url('js/jquery-2.1.1.min.js'); ?>"></script>

		<!-- BootStrap JS -->
		<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		
		<!-- BootStrap Validator  -->
		<script src="<?php echo base_url('js/bootstrapValidator.min.js'); ?>"></script>	
		
		
		
		<script>
			$(document).ready(function(){
				$('#login_form').bootstrapValidator({   
		        	feedbackIcons: {
            			valid: 'glyphicon glyphicon-ok',
        	    		invalid: 'glyphicon glyphicon-remove',
            			validating: 'glyphicon glyphicon-refresh'
          			},
          			fields: {            
            			email: {
                			validators: {
                    			notEmpty: {
                        			message: 'O email é obrigatório'
                    			},
                    			emailAddress: {
                        			message: 'O endereço de email não é válido'
                    			}
                			}
            			}, 
            			senha: {                
                			validators: {
                    			notEmpty: {
                        			message: 'O campo senha é obrigatório'
                    			}              	   
                			}
            			}          	 
			        }
          			
        		});							
			});
		</script>
	
	</head>

	<body>
		
		<div id="tudo">

			<div id="topo">
				<img src=<?php echo base_url("img/logo_lotus_1.png") ?> />
				</br></br>				
			</div>

			<div id="corpo">
				<form  id="login_form" action="<?php echo site_url('login/logar'); ?>" method="post" class="form-horizontal">
					<fieldset>
					<legend>Administração da Homepage</legend>
					<div class="form-group">
						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-user"></span>
  							<input type="text" id="email" name="email" class="form-control" placeholder="Email">
						</div>
					</div>
					
            		<div class="form-group">
            			<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-lock"></span>
  							<input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
						</div>
					</div>
					
					<div class="form-group">
           				<button type="submit"  class="btn btn-primary navbar-btn ">ENTRAR</button>
          			</div>
          		</fieldset>
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