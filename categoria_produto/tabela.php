<?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();
	$consulta = $conexao->query("SELECT * FROM categoria_produto");
	$consulta->execute();
	$categorias = $consulta->fetchAll();

?>

<div class="card-panel">

	<h4 class="center-align">Listagem</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>    	
		    	<th>Descricao</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($categorias as $p): ?>

	    		<tr>
	    			<td><?= $p["idCategoria"] ?></td>
	    			
	    			<td><?= $p["descricao"] ?></td>
	    		
	    			<td> <a href="#tabela" onclick="excluir(<?=$p["idCategoria"]?>)">Excluir</a> </td>

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