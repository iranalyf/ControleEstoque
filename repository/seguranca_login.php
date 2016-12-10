<?php

session_start();

	require "../config/BancoDados.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->prepare("select * from usuario where email = :email and senha = :senha");

	$consulta->bindParam(":email", $email);
	$consulta->bindParam(":senha", $senha);

	$consulta->execute();

	$resul = $consulta->fetch();

	if($resul == false){
		echo "Usuário ou senha inválidos";
	}else{

		session_start();

		$_SESSION["email"] = $resul["email"];

		header("Location: ../index.php");

	}

	?>