<?php 

include "conn.php";

if (isset($_POST['modiPro'])) {
    if (strlen($_POST['idproducto']) >= 1 && strlen($_POST['producto']) >= 1 && strlen($_POST['descripcion']) >= 1
	&& strlen($_POST['cantidad']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['estado']) >= 1&& strlen($_POST['foto']) >= 1) {
	    $idproducto =  trim($_POST['idproducto']);
	    $producto = trim($_POST['producto']);
	    $descripcion =  trim($_POST['descripcion']);
	    $cantidad = trim($_POST['cantidad']);
		$precio =  trim($_POST['precio']);
        $estado = trim($_POST['estado']);
	    $foto = trim($_POST['foto']);

	    $consulta = "UPDATE producto SET producto='$producto',descripcion='$descripcion',cantidad='$cantidad',precio='$precio',foto='$foto' WHERE id_producto ='$idproducto'";
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