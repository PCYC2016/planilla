</head>
<body>
	<form method="post" action="<?php echo base_url('exportarcyc.php')?>" target="_blank">            
		<div class="container">
			<div class="col-lg-4 col-xs-4">
			</div>	
			<div class="col-lg-6 col-xs-12">
				<h3>LISTADO DE BANCOS</h3>
			</div>	
		</div>
		<hr>
		<?php
		echo '<div class="container">';
		echo '<div class="col-lg-2 col-xs-8">';
		echo '</div>';
		echo '<div class="col-lg-6 col-xs-12">';
		echo '<table class="table-bordered table-striped table-condensed table-hover">';
		echo '<thead><th>CÓDIGO</th><th>BANCO</th></thead>';
		echo '<tbody>';
		foreach($rs_Bancos as $fila){
			echo '<tr>';
			echo '<td>'.$fila->codbanco.'</td>';
			echo '<td>'.$fila->nombanco.'</td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
		echo '</div>';
		?>
		<div class="container">
			<div class="col-lg-2 col-xs-1">
			</div>	
			<div class="col-lg-6 col-xs-12 text-left">
				<br>  	 
				<button type="submit" name="Regresar" class="btn btn-primary" onclick="window.history.go(-1); return false;"><< Regresar</button>
				<button type="submit" name="Exportar" class="btn btn-primary">Exportar</button>			
			</div>
		</div>
	</form>
	<br>