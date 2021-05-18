<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<style>
			#atualizada {
				transition: .7s;
			}
			label {
				color: green;
				font-weight: 500;
			}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>
		
		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div id="atualizada" class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Tarefa incluida com sucesso!</h5>
			</div>
		<?php } ?>
		<script>
			var atualizada = document.getElementById('atualizada');
			setTimeout(()=>{
				atualizada.style = 'display: none;';
				atualizada.classList.remove('bg-success');
			},3500);
			
		</script>
		
		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu" id="todas_tarefas">
					
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Login</h4>
								<hr />

								<form method="post" action="tarefa.controller.php?acao=logar">
									

									<div class="form-group">
										<label>E-mail:</label>
										<input type="text" class="form-control" placeholder="Exemplo: fabioLorenzoCeuVerde@gmail.com" name="email"> 
									</div>

									<div class="form-group">
										<label>Senha:</label>
										<input type="password" class="form-control" placeholder="Use a sua senha Cadastrada para logar" name="senha">
									</div>


									<button class="btn btn-success">Logar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="javascript/menu.js"></script>
	<script>
		menu('logar');
	</script>
</html>