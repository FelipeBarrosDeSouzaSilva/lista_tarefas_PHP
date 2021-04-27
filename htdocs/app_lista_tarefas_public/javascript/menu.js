function menu(arquivo){	
	var ul = document.createElement('ul');
	ul.className = 'list-group';
	
	var li1 = document.createElement('li');
	li1.className = 'list-group-item';
	
	var a_index = document.createElement('a');
	a_index.href = 'index.php';
	a_index.innerHTML = 'Tarefas';
	//
	var li2 = document.createElement('li');
	li2.className = 'list-group-item';
	
	var a_nova = document.createElement('a');
	a_nova.href = 'nova_tarefa.php';
	a_nova.innerHTML = 'Nova Tarefa';
	//
	var li3 = document.createElement('li');
	li3.className = 'list-group-item';
	
	var a_todas = document.createElement('a');
	a_todas.href = 'todas_tarefas.php';
	a_todas.innerHTML = 'Todas tarefas';
	//
	var li4 = document.createElement('li');
	li4.className = 'list-group-item disable';
	
	var a_suporte = document.createElement('a');
	a_suporte.href = '#';
	a_suporte.innerHTML = 'Suporte';
	
	switch(arquivo){
		case 'index':
		li1.className += ' active';
		break;
		
		case 'nova_tarefa':
		li2.className += ' active';
		break;
		
		case 'todas_tarefas':
		li3.className += ' active';
		break;
		
	}
	
		var todas_tarefas = document.getElementById('todas_tarefas');
	
	todas_tarefas.appendChild(ul);
	
	
	ul.appendChild(li1);
	ul.appendChild(li2);
	ul.appendChild(li3);
	ul.appendChild(li4);
	
	li1.appendChild(a_index);
	li2.appendChild(a_nova);
	li3.appendChild(a_todas);
	li4.appendChild(a_suporte);
	
}
