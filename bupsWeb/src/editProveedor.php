<?php
	include('../datos/conexion2.php');
	$id = $_POST["id"];
	$text = $_POST["text"];
	$column_name = $_POST["column_name"];
	$sql = "UPDATE material SET ".$column_name."='".$text."' WHERE PK_Material='".$id."'";
	if(mysqli_query($cn, $sql)){?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  <strong>Genial!</strong> Los cambios se registraron con exito.
<?PHP } ?>
