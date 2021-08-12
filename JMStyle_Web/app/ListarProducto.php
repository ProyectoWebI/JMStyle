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
  <?php
    require("DB/main.php");
    $objetoHeader = new elementosMenu();
    $parametro="producto";
    echo($objetoHeader->mostrarHeader($parametro));
  ?>

<header class="d-flex">
<div>
     <a href="Admin.php"><img style="width: 150px;" src="../src/img/logo JMStyle.png" alt=""></a> 
    </div>
    <div id="menuMargin">
      <ul class="nav nav-tabs">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Productos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="subirProducto.php">Subir Producto</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="ListarProducto.php">Listar Productos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Categorias</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="categoria.php">Crear Categoria</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../pages/listacategoria.php">Listar Categoria</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Reportes</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="pedidos.php">Pedidos</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header> 
  <main>
    <div class="text-center">        
        <h1><i class="fas fa-th-list"></i> Listar Productos</h1>
    </div>
</main>
<?php
  $objetoTabla = new elementosMenu();
  echo $objetoTabla->tablaProducto();
?>
    <!-- exportar -->
    <div class="container text-center">
      <div class="well-sm col-sm-12">
        <div class="btn-group pull-rigth">
          <form method="post">
            <button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-info">Exportar a Excel</button>
          </form>
        </div>
      </div>
    </div>

    <?php
  if(isset($_POST["export_data"])) {
    $filename = "reporte_categoria".date('Ymd') . ".xls";
    //header("Content-Type: application/vnd.ms-excel");
    //header("Content-Disposition: attachment; filename=$filename");
    $show_coloumn = false;
    if(!empty($developer_records)) {
    foreach($developer_records as $record) {
    if(!$show_coloumn) {
    // display field/column names in first row
    echo implode("t", array_keys($record)) . "n";
    $show_coloumn = true;
    }
    echo implode("t", array_values($record)) . "n";
    }
    }
    exit;
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>