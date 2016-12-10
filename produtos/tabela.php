<?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("SELECT * FROM produto");

	$consulta->execute();

	$produtos = $consulta->fetchAll();

?>

<div class="card-panel">

	<h4 class="center-align">Listagem</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>Descricao</th>
		    	<th>Data que foi Cadastrado</th>
		    	<th>Valor Unitario</th>
		    	<th>Quantidade em Estoque</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($produtos as $p): ?>

	    		<tr>
	    			<td><?= $p["idProduto"] ?></td>
	    			<td><?= $p["nome"] ?></td>
	    			<td><?= $p["descricao"] ?></td>
	    			<td><?= $p["data_cadastro"] ?></td>
	    			<td><?= $p["valor_unitario"] ?></td>
	    			<td><?= $p["quantidade_estoque"] ?></td>
	    			<td> <a href="#tabela" onclick="excluir(<?=$p["idProduto"]?>)">Excluir</a> </td>

	    		</tr>


	    	<?php endforeach; ?>
	    	
	    </tbody>
	    
	</table>


</div>

<!-- <script type="text/javascript">

	function excluir(codigomedico){
		$.ajax({
			url : "../php/excluir_medico.php",
			method : "GET",
			data : { id : codigomedico},
			success : function(retorno){
				//mensagem retorno
				$("#tabela").load("tabela.php")
			}
		})
	}

</script> -->