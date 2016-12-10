<?php

	$idProduto = $_POST['idCategoria'];
	$descricao = $_POST['descricao'];

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("INSERT INTO categoria_produto (idCategoria,descricao) values (:idCategoria, :descricao)");

	$comando->bindParam(":idCategoria", $idProduto);
	$comando->bindParam(":descricao", $descricao);

	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";
?>