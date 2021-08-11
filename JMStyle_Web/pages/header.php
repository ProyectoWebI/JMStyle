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
      <!--CARRITO-->
      <div style="width:50%; text-align:right; padding-right: 5%; padding-top: 2%;">
            <a href="../app/login.php"> <h2><i id="colorCarrito" class="fas fa-shopping-cart"></i></h2> </a>
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
              <a class="nav-link active" href="acerca.php" id="navbarDropdown">Acerca de</a>

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
