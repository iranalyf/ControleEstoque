<?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("SELECT * FROM fornecedor");

	$consulta->execute();

	$fornecedores = $consulta->fetchAll();

?>

<div class="card-panel">

	<h4 class="center-align">Fornecedores Cadastrados</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>CNJP</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($fornecedores as $f): ?>

	    		<tr>
	    			<td><?= $f["idFornecedor"] ?></td>
	    			<td><?= $f["nome"] ?></td>
	    			<td><?= $f["cnpj"] ?></td>
	    			<td> <a href="#tabela" onclick="excluir(<?=$f["idFornecedor"]?>)">Excluir</a> </td>

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