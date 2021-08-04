<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JMStyle | Store Online</title>
  <link rel="shortcut icon" href="../src/img/logo JMStyleV.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/style/fontawesome-free-5.15.3-web/css_fa5/all.css">
    <link rel="stylesheet" href="../src/style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
</head>

<body>

  <header class="d-flex">
    <div>
      <img style="width: 150px;" src="../src/img/logo JMStyle.png" alt="">
    </div>
    <div id="menuMargin">
      <ul class="nav nav-tabs">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Productos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/app/subirProducto.php">Subir Producto</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/app/ListarProducto.php">Listar Productos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Categorias</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Crear Categoria</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Listar Categoria</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Usuarios</a>
        </li>
      </ul>
    </div>

    <div style="width:50%; text-align:right; padding-right: 5%; padding-top: 2%;">
      <a href="../app/login.html"><i class="fas fa-shopping-cart"></i></a>
    </div>  

  </header>
  <main>
    <div class="text-center">
        
        <h1><i class="fas fa-arrow-circle-up"></i> Subir Producto</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card w-50 col-md-10 shadow p-2 mb-2 bg-white rounded mt-2">
                <form id="registro" name="registro" method="GET">
                    <div class="form-group col">
                        <label for="">Id Producto: </label>
                        <input id="idProducto" class="form-control" type="text">
                    </div>
                    <div class="form-group col">
                        <label for="">Producto: </label>
                        <input id="producto" class="form-control" type="text">
                    </div>

                    <div>
                        <label for="">Descripción: </label>
                        <input id="descripcion" class="form-control" type="tel">
                    </div>

                    <div>
                        <label for="">Cantidad: </label>
                        <input type="text" class="form-control" id="cantidad">
                    </div>

                    <div>
                        <label for="">Precio: </label>
                        <input type="text" class="form-control" id="precio">
                    </div>

                    <div>
                        <label for="">Estado: </label>
                        <input type="text" class="form-control" id="estado">
                    </div>

                    <div>
                        <label for="">Foto: </label>
                        <input type="file"  id="foto">
                    </div>
                
                </form>
                <br>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" id="botonRegis"
                        onclick="formRegistro()">Guardar</button>

                </div>


            </div>
        </div>
    </div>
</main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>