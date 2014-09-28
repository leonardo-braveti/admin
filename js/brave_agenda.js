
$(document).ready(function(){


	$("#corpo").hide();

	

	var troca_label = false;

	$("#mostra_form").click(function(){
		if(troca_label == true){
			$("#mostra_form").text("Novo Evento");
			troca_label=false;
		}
			
		else{
			$("#mostra_form").text("Mostrar Eventos");
			troca_label=true;
		}
			
	});

	$("#mostra_form").click(function(){
		$("#corpo").toggle();
		$('#ultimos_eventos').toggle();

	});


	$("#datepicker").datepicker({
		showOtherMonths: true,
        selectOtherMonths: true,
		showButtonPanel:false,
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']		
	});	

	$('#eventos').dataTable({
		bJQueryUI: true,
		"language": {
            "lengthMenu": "_MENU_",
            "zeroRecords": "Nenhum evento encontrado",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "",
            "infoFiltered": "",
            "paginate": {
        		"first": "Primeiro",
        		"last": "Último",
        		"next": "Próximo",
        		"previous": "Anterior"
    		},
    		"search": "Pesquisar",
    		"loadingRecords": "Carregando...",
    		"processing": "Processando..."
        },
        "columns": [
        	{"title": "#"},
        	{"title": "Evento"},
        	{"title": "Data"},
        	{"title": "Horário"},
        	{"title": "Pontos de Venda"},
        	{"title": "Informações"}, 
        	{"title": "Imagem"},     
        	{"title": "Ações"}
        ],
        "pagingType": "simple",	
        "lengthMenu": [ 3, 6, 9, 12, 15, 18 ]	        
	});

	$(".apagar").click(function(){
		return confirm("Deseja realmente excluir este evento?");
	});


	$(".myline").click(function(){
		chave = $(this).attr("id");
		id = $("#"+chave+" td:nth-child(1)" ).text();
		evento = $("#"+chave+" td:nth-child(2)" ).text();
		data = $("#"+chave+" td:nth-child(3)" ).text();
		hora = $("#"+chave+" td:nth-child(4)" ).text();
		venda = $("#"+chave+" td:nth-child(5)" ).text();
		info = $("#"+chave+" td:nth-child(6)" ).text();
		imagem = $("#"+chave+" td:nth-child(7)" ).text();

		$("#ultimos_eventos").hide();
		$("#mostra_form").hide();
		$("#corpo").show();
		
		$("#atracao").val(evento);
		$("#datepicker").val(data);
		$("#hora").val(hora);
		$("#pvendas").val(venda);
		$("#info").text(info);
		$("#chave").val(id);

		if(imagem !=""){
			//$("#fotinho").attr("src","http://localhost/lotus/admin/uploads/"+imagem);
			$("#fotinho").attr("src","http://www.braveti.com.br/lotus/admin/uploads/"+imagem);
			//$("#fotinho").attr("src","http://demo.lotusuba.com.br/admin/uploads/"+imagem);
		}

		else
			$("#fotinho").hide();			

	
		//$("form").attr("action", "http://localhost/lotus/admin/index.php/agenda/atualizar");
		$("form").attr("action", "http://www.braveti.com.br/lotus/admin/index.php/agenda/atualizar");
		//$("form").attr("action", "http://demo.lotusuba.com.br/admin/index.php/agenda/atualizar");
		

		$("#submeter").val("Atualizar");
	});
});
