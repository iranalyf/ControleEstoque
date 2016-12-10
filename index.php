<?php ob_start(); ?>

<!DOCTYPE html>
<html>

<body>

	<h4 style="margin-left: 40px" >Bem vindo ao Sistema</h4>


	<!-- Grafico de Linhas -->
		
		<div>
			<canvas id="graficoEstoquePorMes" height="160"></canvas>
		</div>

		<script type="text/javascript">
		
		$(function(){
			var GraficoEstoquePorMes = new ControleEstoque.GraficoEstoquePorMes();
			
			GraficoEstoquePorMes.iniciar();
		});
	

	</script>
	
</body>
</html>

<?php 
 
  $conteudo = ob_get_contents();
  $titulo = "Página Incial";
  ob_end_clean();
  include "layout.php";
?>