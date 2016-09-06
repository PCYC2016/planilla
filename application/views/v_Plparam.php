<!DOCTYPE html>
<html lang="en">
<head>
	<title>Párametros generales de la planilla</title>
	<link href="<?php echo base_url("css/css/bootstrap.css");?>" rel="stylesheet" media="all">
	<link href="<?php echo base_url("css/css/plparam.css")?>" rel="stylesheet" media="all">
	<link rel="icon" type="image/jpg" href="<?php echo base_url("imagenes/favicon.jpg");?>">
</head>
<body>
		<div class="container">
			<div class="col-lg-4 col-sm-4">
			</div>	
			<div class="col-lg-6 col-sm-6">
				<h1>SISTEMAS C&C</h1>
				<p>PÁRAMETROS GENERALES DE PLANILLA</p>
			</div>	
		</div>
		<hr>
<div class="container">
     <div class="row">
          <div class="col-lg-3 col-sm-3">
          </div>
          <div class="col-lg-6 col-sm-6 well">
          <fieldset>
               <legend> <span class="inicio">PÁRAMETROS</span></legend>
            <?php foreach($rs_Empresa as $fila){ ?>
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_FormaPago" class="control-label">Forma de pago</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_FormaPago" name="txt_FormaPago" placeholder="Forma de pago de planillas" type="text" value="<?php echo $fila->FormaPago; ?>" />
                    </div>
               </div>
          </div> 
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_DiasLabor" class="control-lable">Días de labor al mes</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_DiasLabor" name="txt_DiasLabor" placeholder="Cantidad de Días" type="text" value="<?php echo $fila->DiasLabor; ?>"/>
                    </div>     
               </div>
          </div>
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_HorasDia" class="control-label">Horas trabajo al día</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_HorasDia" name="txt_HorasDia" placeholder="Cantidad Horas por día" type="text" value="<?php echo $fila->HorasDia; ?>" />
                    </div>
               </div>
          </div> 
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_HorasNoche" class="control-lable">Horas trabajo por noche</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_HorasNoche" name="txt_HorasNoche" placeholder="Cantidad Horas por noche" type="text" value="<?php echo $fila->HorasNoche; ?>"/>
                    </div>     
               </div>
          </div>
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_FactorHED" class="control-lable">Factor horas extras diurnas</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_FactorHED" name="txt_FactorHED" placeholder="Valor horas extra diurna" type="text" value="<?php echo $fila->FactorHED; ?>"/>
                    </div>     
               </div>
          </div>  
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_FactorHEN" class="control-lable">Factor horas extras nocturnas</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_FactorHEN" name="txt_FactorHEN" placeholder="Valor horas extra nocturna" type="text" value="<?php echo $fila->FactorHEN; ?>"/>
                    </div>     
               </div>
          </div> 
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_FactorHEV" class="control-lable">Factor horas extras vacaciones</label>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                         <input class="form-control" id="txt_FactorHEV" name="txt_FactorHEV" placeholder="Valor horas extra vacación" type="text" value="<?php echo $fila->FactorHEV; ?>"/>
                    </div>     
               </div>
          </div>     
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_NomGerente" class="control-label">Nombre Gerente</label>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                         <input class="form-control" id="txt_NomGerente" name="txt_NomGerente" placeholder="Nombre Gerente General" type="text" value="<?php echo $fila->NomGerente; ?>" />
                    </div>
               </div>
          </div>
          <div class="form-group">
               <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                         <label for="txt_NomContado" class="control-label">Nombre Contador</label>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                         <input class="form-control" id="txt_NomContado" name="txt_NomContado" placeholder="Nombre Contador" type="text" value="<?php echo $fila->NomContado; ?>" />
                    </div>
               </div>
          </div>
          <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <button type="submit" name="Regresar" class="btn btn-primary" onclick="history.back()"><< Regresar</button>
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-primary" value="Restablecer" />
               </div>
          </div>
          <?php } ?> 
     </fieldset>
          </div>
     </div>
</div>
 </body>
</html>