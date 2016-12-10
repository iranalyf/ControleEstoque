
<?php

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	define('FPDF_FONTPATH', 'font/');
	include ('../fpdf17/fpdf.php');

	$pdf = new FPDF('P','cm','A4');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);

	$consulta = $conexao->prepare("select * from produto");

	$consulta->execute();

	$result = $consulta->fetchAll();

	foreach ($result as $r) {
		$pdf->Cell(5,1, $r['nome'],1,0,'L');
		$pdf->Cell(5,1, $r['descricao'],1,0,'L');
		$pdf->Cell(5,1, $r['valor_unitario'],1,0,'L');
		$pdf->Cell(5,1, $r['quantidade_estoque'],1,0,'L');
	}
	
	$pdf->Output();	
	
?>
