<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema planillero</title>
	<link href="<?php echo base_url("css/css/bootstrap.css");?>" rel="stylesheet" media="all">
	<link href="<?php echo base_url("css/css/sistemascyc.css")?>" rel="stylesheet" media="all">
	<link rel="icon" type="image/jpg" href="<?php echo base_url("imagenes/favicon.jpg");?>">
</head>
<body>
	<form method="post" action="<?php echo base_url('exportarcyc.php')?>" target="_blank">	
		<div class="container">
			<div class="col-lg-5 col-sm-5">
			</div>	
			<div class="col-lg-6 col-sm-6">
				<h1>BANCOS</h1>
				<p>Listado de bancos</p>
			</div>	
		</div>
		<hr>
		<?php
		echo '<div class="container">';
		echo '<div class="col-lg-2 col-sm-2">';
		echo '</div>';
		echo '<div class="col-lg-6 col-sm-6">';
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
		<div class="col-lg-2 col-sm-2">
		</div>	
		<div class="col-lg-6 col-sm-6 text-left">
			<br>  	 
			<button type="submit" name="Exportar" class="btn btn-primary">Exportar</button>
			<button type="submit" name="Regresar" class="btn btn-primary" onclick="history.go(-1)"><< Regresar</button>
		</div>
	</div>
  </form> 
 </body>
</html>