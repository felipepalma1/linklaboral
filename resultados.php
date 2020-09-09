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
				<div class="step">2</div>
				<div class="stept d-sm-block">Vacaciones</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step">3</div>
				<div class="stept d-sm-block">Remuneraciones</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step steptactual">4</div>
				<div class="stept steptactual d-sm-block">Resultados</div>
			</div>
			
		</div>
	</div>

	<div class="clearfix"></div>

	<!-- INICIO FORMULARIO -->
	<form action="resultados.php" name="customForm" id="customForm" method="post" enctype="multipart/form-data" class="publicar">
		<div class="container mb-6">
		<div class="row">

			<div class="col-12">
					<div class="form-group">
						<label>Indemnizacion por años de Servicio:</label>
						<input type="text" class="form-control" name="indem_servicio">
					</div>
					<div class="form-group">
						<label>Indemnizacion sustitutiva del aviso previo:</label>
						<input type="text" class="form-control" name="indem_sust">
					</div>
					<h6>Vacaciones proporcionales Pendientes:</h6>
					<div class="form-group">
						<label>Mes 1:</label>
						<input type="text" class="form-control" name="vac_prop">
					</div>
					<div class="form-group">
						<label>Feriado Proporcional:</label>
						<input type="email" class="form-control" name="fer_prop">
					</div>
					<div class="form-group">
						<h6>TOTAL A PAGAR</h6>
						<input type="text" class="form-control" name="total"  readonly="readonly">
					</div>
									
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
				</div>
				<div class="btn-group mr-2 mt-3" role="group">
					<input type="submit" name="Registrar" id="send" value="CONTINUAR" class="btn btn_primario pl-5 pr-5 mb-3"/>
				</div>		-->		
			</div>
		</div>
	</div>
</form>
	<!-- FIN FORMULARIO -->

	<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
