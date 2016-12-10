
<?php  
	header('Content-Type: application/json; charset=utf-8');
	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->prepare("select p.data_cadastro, sum(p.valor_unitario * p.quantidade_estoque) from produto p");

	$consulta->execute();

	$result = $consulta->fetchAll();

	$estrutura = json_decode($result);
	//fazer o um for aqui e gerar a estrutura de dado


       echo $estrutura;


	?>