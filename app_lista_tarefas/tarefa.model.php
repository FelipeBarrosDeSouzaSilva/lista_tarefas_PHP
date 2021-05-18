<?php

	class Tarefa {
		private $id;
		private $id_status;
		private $tarefa;
		
		private $id_cadastro;
		private $data_cadastro;
		private $nome;
		private $telefone;
		private $celular;
		private $cep;
		private $cpf;
		private $email;
		private $senha;
		
		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
	}