{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html lang="Español">
<head>
	<title>Localizacion en Laravel</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://flag-icon-css.lip.is/" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-ar"> </span> Español</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
              <a class="dropdown-item" href="lang/ar"><span class="flag-icon flag-icon-ar"> </span>  Español</a>
              <a class="dropdown-item" href="lang/fr"><span class="flag-icon flag-icon-fr"> </span>  Francais</a>
              <a class="dropdown-item" href="lang/en"><span class="flag-icon flag-icon-us"> </span>  English</a>
              <a class="dropdown-item" href="lang/ge"><span class="flag-icon flag-icon-de"> </span>  Deutsche</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container text-center">
    <h1>@lang("¡Hola!")</h1>
    <div class="col-md-offset-2">
      <p>{{ __("Espero que te encuentres bien.")}}</p>
      <p>{{ __("Hablemos de localización en Laravel, créanme, es un tema increíble. No obstante, no muchos se han dado cuenta de esta genialidad.")}}</p>
      <p>{{ __("La localización de acuerdo con el diccionario significa adaptar algo a una posición o ubicación fija. Por lo tanto, es suficiente decir que la localización de Laravel implica adaptar el idioma utilizado en la aplicación a la ubicación dada del usuario.")}}</p>
      <p>{{ __("Un sitio multilíngüe puede parecer algo complicado. Sin embargo, existen varios paquetes para Laravel que simplifican enormemente nuestra labor a punto tal de permitirnos poner en funcionamiento un sitio multilenguaje en cuestión de minutos. ")}}</p>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>