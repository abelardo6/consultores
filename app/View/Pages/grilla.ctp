<?php $meses = array(
	'01' => 'Janeiro',
	'02' => 'Fevereiro',
	'03' => 'Março',
	'04' => 'Abril',
	'05' => 'Maio',
	'06' => 'Junho',
	'07' => 'Julho',
	'08' => 'Agosto',
	'09' => 'Setembro',
	'10' => 'Outubro',
	'11' => 'Novembro',
	'12' => 'Dezembro',
	); 
?>

	<?php
		$total_ganancia_liquida = 0; $brut_salario = 0;	$comision = 0; $lucro = 0;

		foreach ($data as $key => $dat) { 

	?>
	<div class="table-header">
		<?php echo $key; ?>
	</div>
		<div>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th style="text-align: center;">Periodo</th>
						<th style="text-align: center;">Receita Liquida</th>
						<th style="text-align: center;">Custo Fixo</th>
						<th style="text-align: center;">Comissão</th>
						<th style="text-align: center;">Lucro</th>
					</tr>
				</thead>

				<tbody>
				<?php 
					foreach ($data[$key] as $ke => $value) { 

						$total_ganancia_liquida =  $total_ganancia_liquida + $value['ganancia_liquida'];
						$brut_salario =  $brut_salario + $value['brut_salario'];
						$comision = $comision + $value['comision'];
						$lucro = $lucro + $value['lucro'];

				?>
					<tr>
						<td align="left"><?php echo $meses[$ke]." de ".$value['anio']; ?></td>
						<td align="right"><?php echo "R$ ".number_format($value['ganancia_liquida'], 2, '.', '.'); ?></td>
						<td align="right"><?php echo "- R$ ".number_format($value['brut_salario'], 2, '.', '.'); ?></td>
						<td align="right"><?php echo "- R$ ".number_format($value['comision'], 2, '.', '.'); ?></td>
						<td align="right"><?php echo "- R$ ".number_format($value['lucro'], 2, '.', '.'); ?></td>
					</tr>

					<?php } ?>

					<tr>
						<td align="left"><strong>SALDO</strong></td>
						<td align="right"><strong><?php echo "R$ ".number_format($total_ganancia_liquida, 2, '.', '.'); ?></strong></td>
						<td align="right"><strong><?php echo "- R$ ".number_format($brut_salario, 2, '.', '.'); ?></strong></td>
						<td align="right"><strong><?php echo "- R$ ".number_format($comision, 2, '.', '.'); ?></strong></td>
						<td align="right"><strong><?php echo "- R$ ".number_format($lucro, 2, '.', '.'); ?></strong></td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php 
			$total_ganancia_liquida = 0; $brut_salario = 0;	$comision = 0;	$lucro = 0;
		} 
		?>


