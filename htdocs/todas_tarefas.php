<?php
	$acao = 'recuperar';
	require 'tarefa.controller.php';
	/*echo '<pre>';
	foreach($tarefa as $key => $value){
		echo $value['tarefa'];
	}
	echo '</pre>';*/
?>
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
		<?php if(isset($_GET['atualizado'])){?>
				<div id="atualizada" class="bg-success pt-2 text-white d-flex justify-content-center"><h5>Tarefa Atualizada!</h5></div>
		<?php }?>
		<?php if(isset($_GET['remover'])){?>
				<div id="atualizada" class="bg-success pt-2 text-white d-flex justify-content-center"><h5>Tarefa Deletada!</h5></div>
		<?php }?>
		<?php if(isset($_GET['realizada'])){?>
				<div id="atualizada" class="bg-success pt-2 text-white d-flex justify-content-center"><h5>Tarefa atualizada!</h5></div>
		<?php }?>
		
		<script>
			var atualizada = document.getElementById('atualizada');
			setTimeout(()=>{
				atualizada.style = 'display: none;';
				atualizada.classList.remove('bg-success');
			},3500);
			
		</script>
		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu" id="todas_tarefas">
					
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />

<?php foreach($tarefa as $indice => $value){ ?>
								
	<div class="row mb-3 d-flex align-items-center tarefa">
		<div class="col-sm-9" id="tarefa_<?= $value['id']?>";>
			<?php echo $value['tarefa']?> (<?php echo $value['status']?>)
		</div>
		<div class="col-sm-3 mt-2 d-flex justify-content-between">
			<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $value['id'] ?>)"></i>
			<?php if($value['status'] == 'pendente'){?>
				<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $value['id']?>, '<?= $value['tarefa']?>')"></i>
				<i class="fas fa-check fa-lg text-success" onclick="marcarRealizada(<?= $value['id']?>)"></i>
			<?php } ?>
		</div>
	</div>
								
<?php }?>								
								
							</div> <!-- /col -->
						</div> <!-- /row -->
					</div> <!-- /container pagina -->
				</div>
			</div>
		</div>
	</body>
	<script src="javascript/menu.js"></script>
	<script src="javascript/editar.js"></script>
	<script>
		menu('todas_tarefas');
	</script>
	<script>
		
			
			
		</script>
</html>