<?php

class BancoDados{


	public static function criar_conexao(){

		$conexao = new PDO("mysql:dbname=controle_estoque;host=localhost:3306","root","root");

		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexao;

	}

}

?>