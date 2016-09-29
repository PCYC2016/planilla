<link href="<?php echo base_url("css/css/v_Cuadros.css");?>" rel="stylesheet" media="all">
<script src="<?php echo base_url("js/v_Cuadros.js");?>"></script> 
</head>
<body>
	<div class="container">
		<div class="col-lg-3 col-xs-4">
		</div>	
		<div class="col-lg-6 col-xs-12">
			<h3>MANTENIMIENTO DE CUADROS</h3>
		</div>	
	</div>
	<hr>
	<div class="container">
		<div class="col-lg-9 col-xs-12">
			<div class="panel with-nav-tabs panel-primary">
				<div class="panel-heading">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#" class="tablinks" data-toggle="tab" onclick="cambiarPestana(event, 'Isss')">ISSS</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" onclick="cambiarPestana(event,'AFP')">AFP</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" onclick="cambiarPestana(event,'Renta')">RENTA</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" onclick="cambiarPestana(event,'Dias')">DÍAS</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" onclick="cambiarPestana(event,'Agui')">AGUINALDO</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div id="Isss" class="tab-content">
						<div class="tab-pane fade in active">
						   <div class="col-lg-12 col-xs-12">
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">INSTITUCIÓN</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">EXCESO</th><th class="text-center">MÁS</th><th class="text-center">FORMA DE CÁLCULO</th>
									<th class="text-center">INICIA</th><th class="text-center">FINALIZA</th></thead>
									<tbody>
										<?php	
										foreach($rs_Isss as $fila){
											echo '<tr>';
											echo '<td>'.$fila->Institucio.'</td>';
											echo '<td>'.round($fila->Desde,2).'</td>';
											echo '<td>'.round($fila->Hasta,2).'</td>';
											echo '<td>'.$fila->Porcentaje.'</td>';
											echo '<td>'.round($fila->Exceso,2).'</td>';
											echo '<td>'.round($fila->Mas,2).'</td>';
											echo '<td>'.$fila->Tipo.'</td>';
											echo '<td>'.$fila->Fechaini.'</td>';
											echo '<td>'.$fila->Fechafin.'</td>';
											echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="AFP" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">INSTITUCIÓN</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">EXCESO</th><th class="text-center">MÁS</th><th class="text-center">FORMA DE CÁLCULO</th>
									<th class="text-center">INICIA</th><th class="text-center">FINALIZA</th></thead>
									<tbody>
										<?php	
										foreach($rs_AFP as $fila){
											echo '<tr>';
											echo '<td>'.$fila->Institucio.'</td>';
											echo '<td>'.round($fila->Desde,2).'</td>';
											echo '<td>'.round($fila->Hasta,2).'</td>';
											echo '<td>'.$fila->Porcentaje.'</td>';
											echo '<td>'.round($fila->Exceso,2).'</td>';
											echo '<td>'.round($fila->Mas,2).'</td>';
											echo '<td>'.$fila->Tipo.'</td>';
											echo '<td>'.$fila->Fechaini.'</td>';
											echo '<td>'.$fila->Fechafin.'</td>';
											echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="Renta" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">TIPO</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">EXCESO</th><th class="text-center">MÁS</th><th class="text-center">FORMA DE CÁLCULO</th>
									<th class="text-center">INICIA</th><th class="text-center">FINALIZA</th></thead>
									<tbody>
										<?php	
										foreach($rs_Renta as $fila){
											echo '<tr>';
											echo '<td>'.$fila->Institucio.'</td>';
											echo '<td>'.round($fila->Desde,2).'</td>';
											echo '<td>'.round($fila->Hasta,2).'</td>';
											echo '<td>'.$fila->Porcentaje.'</td>';
											echo '<td>'.round($fila->Exceso,2).'</td>';
											echo '<td>'.round($fila->Mas,2).'</td>';
											echo '<td>'.$fila->Tipo.'</td>';
											echo '<td>'.$fila->Fechaini.'</td>';
											echo '<td>'.$fila->Fechafin.'</td>';
											echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				    <div id="Dias" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">TIPO</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th></thead>
									<tbody>
										<?php	
										foreach($rs_Dias as $fila){
											echo '<tr>';
											echo '<td>'.$fila->Institucio.'</td>';
											echo '<td>'.round($fila->Desde).'</td>';
											echo '<td>'.round($fila->Hasta).'</td>';
											echo '<td>'.$fila->Porcentaje.'</td>';
											echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="Agui" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">TIPO</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">DÍAS</th></thead>
									<tbody>
										<?php	
										foreach($rs_Agui as $fila){
											echo '<tr>';
											echo '<td>'.$fila->Institucio.'</td>';
											echo '<td>'.round($fila->Desde).'</td>';
											echo '<td>'.round($fila->Hasta).'</td>';
											echo '<td>'.round($fila->Mas).'</td>';
											echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>	 
			</div>
				<div class="container">
					<div class="col-lg-2 col-xs-1">
					</div>	
					<div class="col-lg-6 col-xs-12 text-left">
						<br>  	 
						<button type="submit" name="Regresar" class="btn btn-primary" onclick="history.go(-1)"><< Regresar</button>
					</div>
				</div>
			</div>
		</div>
		<br>