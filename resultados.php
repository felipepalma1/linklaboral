<?php
# template resultados busqueda autos
//require_once('../../mic/sic.php');


session_start();


       ## 2. Remuneraciones
		
		$_SESSION["diasVacacionesPendientes"] = $_POST["diasVacacionesPendientes"];

                $_SESSION["sueldoBase"] = $_POST["sueldoBase"];
                $_SESSION["bonosFijosImponibles"] = $_POST["bonosFijosImponibles"];

		$_SESSION["mesUno"] = $_POST["mesUno"];
		$_SESSION["mesDos"] = $_POST["mesDos"];
		$_SESSION["mesTres"] = $_POST["mesTres"];


                $_SESSION["bonoColacion"] = $_POST["bonoColacion"];
                $_SESSION["bonoMovilizacion"] = $_POST["bonoMovilizacion"];

		foreach ($_SESSION as $key=>$val)
    			echo $key." ".$val."<br/>";

	## -- Calculo de Resultados.
		
		# 1. Paso 1: Antecedentes
		

		# 3. Paso 3.1 - Remuneraciones Variables
			
			$promedioBonosUltimosTresMeses = round((intval($_SESSION["mesUno"]) + intval($_SESSION["mesDos"]) + intval($_SESSION["mesTres"])/3));
			echo "Promedio ultimos tres meses: ", $promedioBonosUltimosTresMeses, "\n";
			echo "<br>";
			
		# 3. Paso 3.2 - Cálculo Vacaciones
			
			$baseCalculoVacaciones = round(intval($_SESSION["sueldoBase"]) + intval($_SESSION["bonosFijosImponibles"]) + intval($promedioBonosUltimosTresMeses));
			echo "Base Calculo Vacaciones: ", $baseCalculoVacaciones, "\n";
			echo "<br>";

			$valorRemuneracionDiaria = round(((intval($_SESSION["sueldoBase"]) + intval($_SESSION["bonoColacion"]) + intval($_SESSION["bonoMovilizacion"]))/30));
			echo "Valor Remuneracion Diaria: ", $valorRemuneracionDiaria, "\n";
			echo "<br>";

			$gratificacionMensual = round(intval($_SESSION["sueldoBase"])*0.25);

			if ($gratificacionMensual >= 126865)	
				$gratificacionMensual = 126865;
			
			echo "Valor Gratificacion Mensual: ", $gratificacionMensual;
			echo "<br>";

		# 3. Paso 3.3 Asignaciones
			$asignacionBaseCalculo = $baseCalculoVacaciones + $gratificacionMensual + intval($_SESSION["bonoColacion"]) + intval($_SESSION["bonoMovilizacion"]);
			
		# 2. Paso 2: Vacaciones

                        $totalAPagarPorVacaciones = intval($_SESSION["diasVacacionesPendientes"]) * $valorRemuneracionDiaria;
			echo "Total a Pagar por Vacaciones: ", $totalAPagarPorVacaciones;
			echo "<br>";



session_destroy()

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
				<div class="stept d-sm-block">Remuneraciones</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-4">
				<div class="step">3</div>
				<div class="stept d-sm-block">Resultados</div>
			</div>
			
		</div>
	</div>

	<div class="clearfix"></div>

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
					<a href="javascript:void(0)" class="btn btn_primario btn_primario2 pl-5 pr-5 mb-3">VOLVER</a>
				</div>
				<div class="btn-group mr-2 mt-3" role="group">
					<input type="submit" name="Registrar" id="send" value="CONTINUAR" class="btn btn_primario pl-5 pr-5 mb-3"/>
				</div>	
			</div>
		</div>
	</div>
</form>

	<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>


