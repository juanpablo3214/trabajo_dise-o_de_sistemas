<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if ( strlen($_POST['name']) >= 1 && strlen($_POST['RUT']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['direccion']) >= 1 ) {
	    $name = trim($_POST['name']);
	    $RUT = trim($_POST['RUT']);
	    $telefono = trim($_POST['telefono']);
	    $direccion = trim($_POST['direccion']);
	    $consulta = "INSERT INTO proveedor(nom_proveedor, RUT, telefono, direccion) VALUES ('$name', '$RUT', '$telefono', '$direccion')";
	    $resultado = mysqli_query($conex,$consulta);
 	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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
