<?php

	class Conexao {
		private $host = 'localhost';
		private $dbname = 'tarefas';
		private $usuario = 'admin';
		private $senha = 'password';
		
		public function conectar(){
			try {
				$conexao = new PDO(
					"mysql:host=$this->host;dbname=$this->dbname",
					"$this->usuario",
					"$this->senha"
				);
			
			return $conexao;
			
			}catch(PDOException $erro){
				echo '<p>'.$erro.'</p>';
			}
		}
	}