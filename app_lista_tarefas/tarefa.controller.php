<?php
	$caminho = '../../app_lista_tarefas/';
	require $caminho.'tarefa.model.php';
	require $caminho.'tarefa.service.php';
	require $caminho.'conexao.php';
	
	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
	
	if($acao == 'inserir' ) {
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa', $_POST['tarefa']);
		
		$conexao = new Conexao();
		
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();

		header('Location: nova_tarefa.php?inclusao=1');
		/*Nos arquivo publico podemos dentro de app_lista_tarefas/nova_tarefa.php
		  existe uma logica onde verificaomos de o parametro passado via get é inclusao e se inclusao é igual a 1*/
	} else if($acao == 'recuperar') {
		$tarefa = new Tarefa();
		$conexao = new Conexao();
		
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefa = $tarefaService->recuperar();
	}
 