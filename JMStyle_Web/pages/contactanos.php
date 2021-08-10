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
  <header>
    <div>
      <div>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a style="text-decoration: none; color: black;" class="nav-link" href="../app/registrarse.php">Registrate</a>
          </li>
          <li class="nav-item">
            <a style="text-decoration: none; color: black;" class="nav-link" href="../app/login.php">Iniciar Sesion</a>
          </li>
        </ul>
      </div>
      <div>
        <!-- CONTENEDOR HEADER -->
        <div id="enlaces">
          <!--LOGO Y ENLACES  -->
          <div style=" width:50%; text-align:left; padding: left 20px;">
            <!-- LOGO-->
            <img src="../src/img/logo JMStyle.png" alt="" width="100">
          </div>


        </div>

        <div class="menu">
        <!-- MENU-->

        <nav class="navbar navbar-expand-lg letramenu">
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="productos.php">Disponibles</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="prod_Damas.php">Damas</a></li>
                              <li><a class="dropdown-item" href="prod_Caballeros.php">Caballeros</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="prod_Accesorios.php">Accesorios</a></li>
                              <li><a class="dropdown-item" href="prod_Deportivo.php">Deportivo</a></li>
                              <li><a class="dropdown-item" href="prod_Zapatos.php">Zapatos</a></li>
                            </ul>
                          </li>

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="contactanos.php">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="acerca.html" id="navbarDropdown">Acerca de</a>

              </ul>
              </li>

              </ul>
              <form action="app/DB/buscar.php" method="GET" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar productos" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>

      </div>



  </header>

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

  <footer id="footer" class="letrafooter">
    <div class="container">
      <div class="row">
        <div class="col-md-4 divBor" style="padding-top: 3rem;">
          <nav class="nav flex-column">
            <a href="../index.php">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="contactanos.php">Contáctanos</a>
            <a href="acerca.html">Acerca de</a>
          </nav>
        </div>
        <!-- enlaces Redes sociales -->
        <div class="col-md-4 divBor text-center" style="padding-top: 5rem;">
          <img class="aligncenter" id="tamIcon" src="src/img/iconos/fb.png" alt="">
          <img class="aligncenter" id="tamIcon" src="src/img/iconos/insta.png" alt="">
          <img class="aligncenter" id="tamIcon" src="src/img/iconos/twitter.png" alt="">
        </div>

        <div class="col-md-4 " style="padding-top: 1rem;">
          <div>
            <a>Ubicacion:</a>
          </div>
          <div id="map-container-google-1" class="z-depth-1-half map-container text-center"
            style="height: 250px; padding-top: 1rem;">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30888.152059915345!2d-87.85350337591268!3d14.597992777798071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6595a3b6d8afe3%3A0x3dab665e36cbd548!2sSiguatepeque%2C%20Honduras!5e0!3m2!1ses!2sus!4v1625805419572!5m2!1ses!2sus"
              width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div style="width: 100%; text-align: center; padding-top: 20px;">
      <a> ®Derechos Reservados - 2021, JMStyle</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>