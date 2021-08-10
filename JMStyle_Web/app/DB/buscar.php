<?php
include "conn.php"

$busqueda= stdtolower ($_REQUEST["busqueda"]);
if(empty($busqueda)){
    header("location: ListarProducto.php")
}

?>