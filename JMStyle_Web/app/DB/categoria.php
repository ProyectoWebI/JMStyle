
<?php 

include "conn.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['texto']) >= 1) {
	    $name = trim($_POST['name']);
	    $texto = trim($_POST['texto']);
	    $consulta = "INSERT INTO categoria(nombre, descripcion, fecha_reg) VALUES ('$name','$texto')";
	    $resultado = mysqli_query($conn,$consulta);
		
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Categoria creada correctamente!</h3>
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