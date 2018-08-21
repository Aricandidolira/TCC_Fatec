<?php
	/**
	 * Ações de banco de dados (acesso, validação, etc.)
	 * @autor Original: Janson Lengstorf
	 * @livro:Pro PHP e jQuery
	 * @arquivo modificado
	*/
	abstract class conexao {
		protected $db;
		
		protected function __construct()
		{
			$dsn="mysql:host=localhost;dbname=si2017p9";
			try
			{
				$this->db = new PDO($dsn, "si2017p9", "@#@2");
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}
	}
?>