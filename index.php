<html>
	<head>
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" />
		<style>
			#c
			{
				min-height:300px;
			}
			.input-group
			{
				margin:10px;
			}
			#cent{
				width:500px;
				margin:0 auto;
				margin-top:20px;
				display:table;
			}
			#s{display:table;width:100%;mim-height:200px;}
		</style>
		<script>
			function cepo(){
				$.get("webservice-cep/cep.php",{cep:$('#cep').val()},function(retorno){
					var dados = JSON.parse('{"employees":[' + retorno + ']}');
					//alert(dados.employees[0].logradouro);
					$('#rua').val(dados.employees[0].logradouro);
					$('#bairro').val(dados.employees[0].bairro);
					$('#cidade').val(dados.employees[0].cidade);
					$('#uf').val(dados.employees[0].uf);
					
				});
			}
		</script>
	</head>
	
	<body>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/npm.js"></script>
		<div id="cent">
		<div id="s">
			<form class="navbar-form navbar-left" role="search" action="javascript:;">
				<div class="form-group">
					<input type="text" id="cep" class="form-control" placeholder="Procurar CEP">
				</div>
				<button type="submit" onclick="cepo();" class="btn btn-default">Submit</button>
			</form>
		</div>
		<div id="c">
			
			
			<div class="input-group">
				<span class="input-group-addon">Logadouro</span>
				<input type="text" id="rua" class="form-control" placeholder="">
			</div>
			
			<div class="input-group">
				<span class="input-group-addon">Bairro</span>
				<input type="text" id="bairro" class="form-control" placeholder="">
			</div>
			
			<div class="input-group">
				<span class="input-group-addon">Cidade</span>
				<input type="text" class="form-control" placeholder="" id="cidade">
			</div>
			
			<div class="input-group">
				<span class="input-group-addon">UF</span>
				<input type="text" class="form-control" placeholder="" id="uf">
			</div>
		</div>
		</div>
	</body>
</html>