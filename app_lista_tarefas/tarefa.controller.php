<?php
	$caminho = '../../app_lista_tarefas/';

	print_r($_POST);
	
	require $caminho.'tarefa.model.php';
	require $caminho.'tarefa.service.php';
	require $caminho.'conexao.php';
	
	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);
	
	$conexao = new Conexao();
	
	$tarefaService = new TarefaService($conexao, $tarefa);
		echo '<pre>';
		print_r($tarefaService);
