{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/ --}}

<!DOCTYPE html>
<html>
<head>
	<title>Ingrese sus datos</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
		.container{
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form class="form-horizontal" action="{{ route ('login') }}" method="POST">
			@csrf

			<div class="form-group">
				<label for="inputnombre" class="col-sm-2 control-label">Nombre: </label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="nombre" id="inputnombre" placeholder="Nombre" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEdad" class="col-sm-2 control-label">Edad: </label>
				<div class="col-sm-3">
					<input type="number" class="form-control" name="edad" id="inputEdad" placeholder="Edad" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Ingresar...</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>