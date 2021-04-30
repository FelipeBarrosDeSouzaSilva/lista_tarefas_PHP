	
	function editar(id, valor){
		let form = document.createElement('form');
		form.action = 'tarefa.controller.php?acao=atualizar';
		form.method = 'post';
		form.className = 'row';
		
		let inputTarefa = document.createElement('input');
		inputTarefa.type = 'text';
		inputTarefa.name = 'tarefa';
		inputTarefa.className = 'form-control';
		inputTarefa.className = 'col-9 form-control';
		inputTarefa.value = valor;
		
		let inputId = document.createElement('input');
		inputId.type = 'hidden';
		inputId.name = 'id';
		inputId.value = id;
		
		let button = document.createElement('button');
		button.type = 'submit';
		button.className = 'col-3 btn btn-info';
		button.innerHTML = 'Atualizar';
		
		form.appendChild(inputTarefa);
		
		form.appendChild(inputId);
		
		form.appendChild(button);
		
		let tarefa = document.getElementById('tarefa_' + id);
		
		//limpar texto para atribuir novo html
		
		tarefa.innerHTML = '';
		
		//incluir html programado
		
		tarefa.insertBefore(form, tarefa[0]);
	}	
	function remover(id){
		location.href  = 'todas_tarefas.php?acao=remover&id=' + id;
	}
	function marcarRealizada(id){
		location.href  = 'todas_tarefas.php?acao=marcarRealizada&id=' + id;
	}