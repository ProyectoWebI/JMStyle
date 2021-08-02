<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JMStyle | Store Online</title>
  <link rel="shortcut icon" href="src/img/logo JMStyleV.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="src/style/fontawesome-free-5.15.3-web/css_fa5/all.css">
  <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
  <header>
    <div>
      <div>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a style="text-decoration: none; color: black;" class="nav-link" href="app/registrarse.php">Registrate</a>
          </li>
          <li class="nav-item">
            <a style="text-decoration: none; color: black;" class="nav-link" href="app/login.php">Iniciar Sesion</a>
          </li>
        </ul>
      </div>
      <!-- CONTENEDOR HEADER -->
      <div id="enlaces">
        <!--LOGO Y ENLACES  -->
        <div style=" width:50%; text-align:left; padding: left 20px;">
          <!-- LOGO-->
          <img src="src/img/logo JMStyle.png" alt="" width="100">
        </div>
      </div>

      <div class="menu">
        <!-- MENU-->

        <nav class="navbar navbar-expand-lg letramenu">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link active" aria-current="page" href="pages/productos.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="pages/contactanos.php">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="pages/acerca.html" id="navbarDropdown">Acerca de</a>

              </ul>
              </li>

              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar productos" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>

      </div>

      <div>
        <!-- SLIDE-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="src/img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="src/img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="src/img/slide.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div style="margin: 80px 30px 30px 30px;">
      <!--Imagenes-->
      <section>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="src/img/Articulos/pantalon_on.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pantalón Hombre</h5>
                <p class="card-text">Talla: 29x30 Slim Etroit <br>
                  Color: Gris <br>
                  Disponible para entrega inmediata</h4>.</p>
              </div>

            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="src/img/Articulos/sueter_01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sueter Nike</h5>
                <p class="card-text">Marca: Nike, Jordan
                  <br> Talla: L(niño)
                  <br> Lps.740</p>
              </div>

            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="src/img/Articulos/vestido_01.png" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Vestido Rojo</h5>
                <p class="card-text"> Talla: M <br>
                  Precio: 150 <br>
                  Disponible</p>
              </div>
              <!-- <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div> -->
            </div>
          </div>
        </div>
      </section>
    </div>
  </header>

  <footer id="footer" class="letrafooter">
    <div class="container">
      <div class="row">
        <div class="col-md-4 divBor" style="padding-top: 3rem;">
          <nav class="nav flex-column">
            <a href="index.php">Inicio</a>
            <a href="pages/productos.php">Productos</a>
            <a href="pages/contactanos.php">Contáctanos</a>
            <a href="pages/acerca.html">Acerca de</a>
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
          <div id="map-container-google-1" class="z-depth-1-half map-container text-center" style="height: 250px; padding-top: 1rem;">
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