<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMStyle | Store Online</title>
    <link rel="shortcut icon" href="src/img/logo JMStyleV.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/fontawesome-free-5.15.3-web/css_fa5/all.css">
    <link rel="stylesheet" href="src/style/style.css">
   </head>
<body>
    <header>
        <div > <!-- CONTENEDOR HEADER -->
            <div id="enlaces"> <!--LOGO Y ENLACES  -->
                <div style=" width:50%; text-align:left; padding: left 20px;">   <!-- LOGO-->
                    <img src="src/img/logo JMStyle.png" alt="" width="100">
                </div>

                
            </div>

            <div class="menu"> <!-- MENU-->
                
                <nav class="navbar navbar-expand-lg letramenu">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.php">Inicio</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link active" href="pages/acerca.html" id="navbarDropdown"  >Acerca de</a>
                                                                                      
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

            <div> <!-- SLIDE-->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
        <div style="margin: 80px 30px 30px 30px;"> <!--Imagenes-->
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
                        <img src="src/img/Articulos/vestido_01.png" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title">Vestido Rojo</h5>
                          <p class="card-text">                            Talla: M <br>
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
    
    <main>
        
    </main>

    <footer id="footer" class="navbar navbar-expand-lg letramenu">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col">
            <div class="col-md-6">
              <nav class="nav flex-column">
                <a class="nav-link" href="index.php">Inicio</a>
                <a class="nav-link " aria-current="page" href="pages/productos.php">Productos</a>
                <a class="nav-link " aria-current="page" href="pages/contactanos.php">Contáctanos
                  <a class="nav-link " href="pages/acerca.html" id="navbarDropdown">Acerca de
              </nav>
            </div>
            <!-- enlaces Redes sociales -->
            <div>
              <img class="aligncenter" id="tamIcon" src="src/img/iconos/fb.png" alt="">
              <img class="aligncenter" id="tamIcon" src="src/img/iconos/insta.png" alt="">
              <img class="aligncenter" id="tamIcon" src="src/img/iconos/twitter.png" alt="">
            </div>      
          </div>
          <div >
            <div style="width: 100%; text-align: center; padding-top: 50px;"> 
            <h4> ®Derechos Reservados - 2021, Juan Carlos Sánchez</h4>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>