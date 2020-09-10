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
				<div class="step">1</div>
				<div class="stept d-sm-block">Antecedentes</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step steptactual">2</div>
				<div class="stept steptactual d-sm-block">Vacaciones</div>
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
	<form action="remuneraciones.php" name="customForm" id="customForm" method="post" enctype="multipart/form-data" class="publicar">
		<div class="container mb-6">
		<div class="row">

			<div class="col-12">
					<h2>Vacaciones</h2>
					<div class="form-group">
						<label>Días de vacaciones pendientes (aproximado)</label>
						<input type="text" class="form-control" name="diasVacaciones"> 
					
					</div>

					<div class="form-group">
						<label>Total a pagar vacaciones</label>
						<input type="text" class="form-control" name="totalPagarVacaciones">
					</div>

					<h2>Remuneraciones</h2>
<!--					<div class="form-group">
						<label>Total Vacaciones otorgadas durante la permanencia del trabajador (días hábiles)</label>
						<input type="text" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						<label>Días hábiles de vacaciones tomados por el trabajador durante su permanencia:</label>
						<input type="text" class="form-control" name="apellido">
					</div>
					<div class="form-group">
						<label>Ingrese la cantidad de dias inhábiles a partir del día siguiente al despido:</label>
						<input type="text" class="form-control" name="rut">
					</div>
					<div class="form-group">
						<label>Total días de vacaciones pendientes (Considera días hábiles e inhábiles)</label>
						<input type="email" class="form-control" name="email"  readonly="readonly">
					</div>
					<div class="form-group">
						<label>Total a Pagar por Concepto de Vacaciones</label>
						<input type="text" class="form-control" name="movil"  readonly="readonly">
					</div>
									
					<h6>
						El cálculo de finiquito una herramienta de simulación.
LABORALINK no se responsabiliza por el uso que se le de a la información.
Los resultados obtenidos de este simulador están diseñados con propósitos comparativos.
Su precisión no está garantizada.  
</h6>
			</div>
!-->				
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
