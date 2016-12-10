<?php  

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$data_cadastro = $_POST['data_cadastro'];
	$valor_unitario = $_POST['valor_unitario'];
	$quantidade_estoque = $_POST['quantidade_estoque'];
		
	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("INSERT INTO produto (nome,descricao, data_cadastro, valor_unitario, quantidade_estoque) 
		values (:nome, :descricao, :data_cadastro, :valor_unitario, :quantidade_estoque)");

	$comando->bindParam(":nome", $nome);
	$comando->bindParam(":descricao", $descricao);
	$comando->bindParam(":data_cadastro", $data_cadastro);
	$comando->bindParam(":valor_unitario", $valor_unitario);
	$comando->bindParam(":quantidade_estoque", $quantidade_estoque);

	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";

	?>	}
