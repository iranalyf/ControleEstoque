<?php ob_start(); 

session_start();

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['email']);
	unset($_SESSION['senha']);

	header('location: ../login.php');
}

?>
<div class="card-panel">

	<h4 class="center-align">Cadastro de Categoria do Produto</h4>
   
	<form id="cadastro">

		<div class="row">

		 <div class="input-field col s12">
		        <input id="idCategoria" type="number" name="idCategoria" required>
		        <label for="idCategoria">Numero</label>
		    </div>
		
		    <div class="input-field col s12">
		        <input id="descricao" type="text" name="descricao" required>
		        <label for="descricao">Descrição</label>
		    </div>	    
		 </div>


		<button class="btn waves-effect waves-light" type="submit">
			Salvar
	  	</button>

	  	<div id="mensagem">

	  	</div>

	</form>

</div>


<script type="text/javascript">

	$("#cadastro").submit(function(event){

		//Cancela o evento de submit do formulário
		event.preventDefault();

		//Envio via AJAX com JQuery
		$.ajax({

			url: "../repository/cadastro_categoria_produto.php",
			method : "POST",
			data : $("#cadastro").serialize(),
			success: function(retorno){
				$("#mensagem").html(retorno)
				$("#cadastro").trigger("reset")

				$("#tabela").load("tabela.php")
			
			}
		})


	})

</script>