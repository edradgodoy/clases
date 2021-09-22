<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/footers.css">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script src="asset/js/bootstrap.js"></script>
    <script src="asset/js/function.js"></script>
    <title>Programación II</title>
  </head>
  <body onLoad="optionsub()">
    <nav class="navbar fixed-top navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Programación II</a>
      </div>
    </nav> <br>
    <br>
    <div class="container-fluid mt-5">
      <div class="card border-4">
        <div class="card-header">
          Convertidor de unidades
        </div>
        <div class="card-body">
          <h5 class="card-title">La mejor manera de convertir unidades</h5>
          <p class="card-text">Realiza la conversión de unidades fácil y rápido</p>
          <br/>
          <form class="row g-3" method="POST" action="" name="formconvert" id="formconvert">
            <div class="row">
              <div class="mb-3 row">
                <label for="UnidadMedida" class="col-sm-2 col-form-label">Unidades a trabajar</label>
                <div class="col-sm-10">
                  <select class="form-control" name="UnidadMedida" id="UnidadMedida" required="required">
                    <option value="Superficie">Superficie</option>
                    <option value="Longitud">Longitud</option>
                    <option value="Temperatura">Temperatura</option>
                    <option value="Volumen">Volumen</option>
                    <option value="Masa">Masa</option>
                    <option value="Velocidad">Velocidad</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 row">
                <label for="deUnidadMedida" class="col-sm-2 col-form-label">Origen</label>
                <div class="col-sm-10">
                  <select class="form-control" name="deUnidadMedida" id="deUnidadMedida" required="required">
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 row">
                <label for="UnidadMedida" class="col-sm-2 col-form-label">Cantidad: </label>
                <div class="col-sm-10">
                  <input class="form-control" name="cantidad" id="cantidad" type="text" value="1" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 row">
                <label for="AUnidadMedida" class="col-sm-2 col-form-label">A: </label>
                <div class="col-sm-10">
                  <select class="form-control" name="AUnidadMedida" id="AUnidadMedida" required="required">
                  </select>
                </div>
              </div>
            </div>
            <div id="mostrarResultado">
              
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid border-top border-3 mt-5  bottom-0 end-0">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-mute">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-mute">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-mute">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-mute">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-mute">About</a></li>
        </ul>
        <p class="text-center text-mute">&copy; 2021 Edrad Godoy, Inc</p>
      </footer>
    </div>
  </body>
</html>