<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JMStyle | Store Online</title>
    <link rel="shortcut icon" href="../src/img/logo JMStyleV.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/fontawesome-free-5.15.3-web/css_fa5/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="../src/style/style.css">
    

</head>

<body >
    
    <?php
      include('../app/DB/conn.php');
    ?>
    
    <header>
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
                        <a class="nav-link active" aria-current="page" href="../pages/productos.php">Productos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/contactanos.php">Contáctanos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="../pages/acerca.html" id="navbarDropdown"  >Acerca de</a>
                                                                                  
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
    </header>
<main>
    <div id="login">
        <div>
            <img src="../src/img/logo JMStyle.png" alt="">
        </div>
        <div>
            <form action="../app/DB/test_db.php" method="GET" class="form-box animated fadeInUp">
            <a class="form-title">Iniciar Sesion</a>
            <input type="text" name="user" placeholder="Usuario" autofocus>
            <input type="password" name="pass" placeholder="Password">
            <button type="submit">Login</button>
            <a href="../app/registrarse.php">Registrarse</a>
        </form>
        </div>
    </div>    
</main>
</body>
</html>