<?php  
	
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];


	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("INSERT INTO fornecedor (nome, cnpj) VALUES (:nome, :cnpj) ");

	$comando->bindParam(":nome", $nome);
	$comando->bindParam(":cnpj", $cnpj);


	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";

	?>