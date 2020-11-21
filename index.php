<!DOCTYPE html>
<html>
<head>
	<title>Registro de proveedor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registro de proveedor</h1>
    	<input type="text" name="name" placeholder="Ingrese su Nombre">
        <input type="text" name="RUT" placeholder="Ingrese RUT">
        <input type="text" name="direccion" placeholder="Ingrese su Direccion">
    	<input type="text" name="telefono" placeholder="Ingrese su telefono">
    	<input type="submit" name="register">
    </form>
    <?php
    include("registrar.php")
    ?>
</body>
</html>
