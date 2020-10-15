<?php

	class Conexao {
		private $host = 'localhost';
		private $db_name = 'bdvendas';
		private $usuarios = 'root';
		private $senha = '';
		
		function conectar(){
			try {
				$conexao = new PDO("
				mysql:host=$this->$host;dbname=$this->dbname",
				"$this->usuario",
				"$this->senha
			");
			
			return $conexao;
			
			}catch(PDOException $erro){
				echo '<p>'.$erro.'</p>';
			}
		}
	}