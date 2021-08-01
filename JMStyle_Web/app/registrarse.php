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
        <div id="enlaces"> <!--LOGO Y ENLACES  -->
            <div style=" width:50%; text-align:left; padding: left 20px;">   <!-- LOGO-->
                <img src="../src/img/logo JMStyle.png" alt="" width="100">
            </div>

            
        </div>

        <div class="menu">
            <!-- MENU-->

            <nav class="navbar navbar-expand-lg letramenu">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" aria-current="page"
                                    href="../pages/productos.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="../pages/contactanos.php">Contáctanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/acerca.html" id="navbarDropdown">Acerca de</a>

                        </ul>
                        </li>

                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar productos"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="text-center">
            <h1>Registro</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card w-50 col-md-10 shadow p-2 mb-2 bg-white rounded mt-2">
                    <form id="registro" name="registro" method="GET">
                        <div class="form-group col">
                            <label for="">Nombre: </label>
                            <input id="nombre" class="form-control" type="text">
                        </div>
                        <div class="form-group col">
                            <label for="">Apellido: </label>
                            <input id="apellido" class="form-control" type="text">
                        </div>

                        <div>
                            <label for="">Telefono: </label>
                            <input id="telefono" class="form-control" type="tel" placeholder="0000-0000"
                                pattern="[0-9]{4}-[0-9]{4}">
                        </div>

                        <div>
                            <label for="">Direccion: </label>
                            <input type="text" class="form-control" id="direccion">
                        </div>

                        <div>
                            <label for="email">Correo: </label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Opcional">
                        </div>

                        <div>
                            <label for="">Usuario: </label>
                            <input type="text" class="form-control">
                        </div>

                        <div>
                            <label for="">Contraseña: </label>
                            <input type="password" class="form-control" id="password">
                        </div>


                        <div>
                            <label for="">Confirmar Contraseña: </label>
                            <input type="password" class="form-control" id="password">
                        </div>

                    </form>
                    <br>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" id="botonRegis"
                            onclick="formRegistro()">Registrarse</button>

                    </div>


                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>