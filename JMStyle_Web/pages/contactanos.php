<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JMStyle | Store Online</title>
  <link rel="shortcut icon" href="../src/img/logo JMStyleV.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../src/style/fontawesome-free-5.15.3-web/css_fa5/all.css">
  <link rel="stylesheet" href="../src/style/style.css">
  <script type="text/javascript" src="../js/funciones.js"></script>
</head>

<body>
<?php
  include ("header.php")
?>

  <main>
    <div style="margin: 50px ;">
      <h2 class="text-center">CONTACTANOS</h2>
      <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna Pregunta?
        No dudes en contactarnos directamente.
      </p>

    </div>

    <div class="container">
      <a href="" id="alerta" class="text-danger"></a>
      <div class="row">
        <div class="col">
          <form id="contacto" name="contacto" method="GET">
            <div class="form-group col">
              <label for="">Nombre: </label>
              <input id="nombre" class="form-control" type="text">
            </div>
            <div>
              <label for="email">Correo: </label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Enter email">
            </div>

            <div>
              <label for="">Telefono: </label>
              <input id="telefono" class="form-control" type="tel" placeholder="0000-0000" pattern="[0-9]{4}-[0-9]{4}">
            </div>

            <div class="form-group purple-border">
              <label for="">Consulta:</label>
              <textarea id="consulta" class="form-control" name="Consulta"></textarea>
            </div>
          </form>

          <br>
          <br>

          <input type="button" class="btn btn-success center" onclick="formContato()" value="Enviar">

        </div>

        <div class="col">
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30888.152059915345!2d-87.85350337591268!3d14.597992777798071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6595a3b6d8afe3%3A0x3dab665e36cbd548!2sSiguatepeque%2C%20Honduras!5e0!3m2!1ses!2sus!4v1625805419572!5m2!1ses!2sus"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div>
          <div>
            <ul class="nav justify-content-center">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Siguatepeque, Honduras</p>
              </li>

              <li><i class="fas fa-phone fa-2x "></i>
                <p>+(504) 0000-0000</p>
              </li>

              <li><i class="fas fa-envelope fa-2x"></i>
                <p>contact@jmstyle.com</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div style="margin: 500px ;">
    </div>
  </main>
  <?php
    include ("footer.php")
  ?> 
  
</body>


</html>