<?php  
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("INSERT INTO usuario (nome, email, senha) values (:nome, :email, :senha)");

	$comando->bindParam(":nome", $nome);
	$comando->bindParam(":email",$email);
	$comando->bindParam(":senha", $senha);

	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";

	?>