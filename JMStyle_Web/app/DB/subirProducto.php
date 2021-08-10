<?php 

include "conn.php";

if (isset($_POST['subirPro'])) {
    if (strlen($_POST['idproducto']) >= 1 && strlen($_POST['producto']) >= 1 && strlen($_POST['descripcion']) >= 1
	&& strlen($_POST['cantidad']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['foto']) >= 1) {
	    $idproducto =  trim($_POST['idproducto']);
	    $producto = trim($_POST['producto']);
	    $descripcion =  trim($_POST['descripcion']);
	    $cantidad = trim($_POST['cantidad']);
		$precio =  trim($_POST['precio']);
	    $foto = trim($_POST['foto']);

	    $consulta = "INSERT INTO producto(id_producto,producto,descripcion,cantidad,precio,foto)
		 VALUES ('$idproducto','$producto','$descripcion','$cantidad','$precio','$foto')";
	    $resultado = mysqli_query($conn,$consulta);
		
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Producto guardado correctamentamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>