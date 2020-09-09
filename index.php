<?
# template resultados busqueda autos
//require_once('../../mic/sic.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Laboralink</title>
	<link href="//casos.laboralink.cl/registro/css/bootstrap.css" rel="stylesheet">
	<link href="//casos.laboralink.cl/registro/css/autofaro.css" rel="stylesheet">
	<link href="//casos.laboralink.cl/registro/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 
	<script src="//casos.laboralink.cl/registro/js/jquery.min.js"></script>
</head>

<body>

<div class="container mb-5">
		<div class="row">

			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step stepactual">1</div>
				<div class="stept steptactual d-sm-block">Antecedentes</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step">2</div>
				<div class="stept d-sm-block">Vacaciones</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step">3</div>
				<div class="stept d-sm-block">Remuneraciones</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step">4</div>
				<div class="stept d-sm-block">Resultados</div>
			</div>
			
		</div>
	</div>

	<div class="clearfix"></div>

	<!-- INICIO FORMULARIO -->
	<form action="vacaciones.php" name="customForm" id="customForm" method="post" enctype="multipart/form-data" class="publicar">
		<div class="container mb-6">
		<div class="row">

			<div class="col-12">
					<div class="form-group">
						<label>Ingrese Artículo Causal de Finiquito</label>
						<div class="select">
						<select name="articulo" onchange="changeList(this);">
							<option selected="selected" value="1">Art. 161 Necesidades de la empresa.</option>
		                    <option selected="selected" value="2">Art. 159 Inciso 1. Mutuo acuerdo de las partes.</option>
		                    <option value="3">Art. 159 Inciso 2. Renuncia del Trabajador.</option>
		                    <option value="4">Art. 159 Inciso 3. Muerte del Trabajador.</option>
		                    <option value="5">Art. 159 Inciso 4. Vencimiento del plazo convenido en el contrato.</option>
		                    <option value="6">Art. 159 Inciso 5. Conclusion del trabajo que dio origen al contrato.</option>
		                    <option value="7">Art. 159 Inciso 6. Caso fortuito o fuerza mayor.</option>
		                    <option value="8">Art. 160 Inciso 1. Falta de probidad, vias de hecho, injurias o conducta grave.</option>
		                    <option value="9">Art. 160 Inciso 2. Negociaciones que ejecuta el trabajador dentro del giro del negocio.</option>
		                    <option value="10">Art. 160 Inciso 3. No concurrencia del trabajador a sus labores sin causa justificada.</option>
		                    <option value="11">Art. 160 Inciso 4. Abandono del trabajo por parte del trabajador.</option>
		                    <option value="12">Art. 160 Inciso 5. Actos, omisiones o imprudencias temerarias que afectan a la seguridad, a la salud, al funcionamiento del trabajador y/o establecimiento. </option>
		                    <option value="13">Art. 160 Inciso 6. Perjuicio material causado intencionalmente en las instalaciones, maquinarias, utiles, productos, mercaderias, etc. del trabajo.</option>
		                    <option value="14">Art. 160 Inciso 7. Incumplimiento grave de las obligaciones que impone el contrato.</option>
	                    </select>
						</div>
					</div>
					<div class="form-group">
						<label>Fecha de contrato:</label>
						<input type="date" class="form-control" name="fechacontrato">
					</div>
					<div class="form-group">
						<label>Fecha de finiquito</label>
						<input type="date" class="form-control" name="fechafiniquito">
					</div>
					<!--<div class="form-group">
						<label>Total días trabajados entre la fecha de Contrato y Finiquito</label>
						<input type="email" class="form-control" name="diastrabajados">
					</div>
					<div class="form-group">
						<label>Factor de Calculo Diario hecho en Base a 360 días (30 días por mes)</label>
						<input type="text" class="form-control" name="factorcalculo">
					</div>
					<div class="form-group">
						<label>Años de Servicio</label>
						<input type="text" class="form-control" name="anosdeservicio">
					</div>-->
									
					<h6>
						El cálculo de finiquito una herramienta de simulación.
LABORALINK no se responsabiliza por el uso que se le de a la información.
Los resultados obtenidos de este simulador están diseñados con propósitos comparativos.
Su precisión no está garantizada.  
</h6>
			</div>
				
			<div class="col-12 text-center">
				<!--<div class="btn-group mr-2" role="group">
					<a href="javascript:void(0)" class="btn btn_primario btn_primario2 pl-5 pr-5 mb-3">VOLVER</a>
				</div>-->
				<div class="btn-group mr-2 mt-3" role="group">
					<input type="submit" name="Registrar" id="send" value="CONTINUAR" class="btn btn_primario pl-5 pr-5 mb-3"/>
				</div>				
			</div>
		</div>
	</div>
</form>
	<!-- FIN FORMULARIO -->

	<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>