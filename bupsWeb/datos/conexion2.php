<?php
	$servidor = "localhost";
	$usuario = "root";
	$contraseña = "";
	$basedatos = "prueba";

	$cn = mysqli_connect ($servidor, $usuario, $contraseña)
	or die
	("No se puede conectar con el servidor");

	mysqli_select_db ($cn, $basedatos)
	or die
	("No se puede conectar con la base de datos");

	mysqli_query($cn, "SET NAMES 'utf8'") or die ("Error de consulta");
?>
