<?php

include('../datos/conexion2.php');

  $nombre = $cn->real_escape_string($_POST["nombProd"]);
  $precio = $cn->real_escape_string($_POST["priceProd"]);
  $caracteristicas = $cn->real_escape_string($_POST["descrip"]);

  if (isset($_POST["addProd"])){

    $sql = "INSERT INTO material (PK_Material, Nombre, Precio_Compra, Caracteristicas) VALUES ('', '$nombre', '$precio', '$caracteristicas')";
    $consulta = mysqli_query($cn, $sql).mysqli_error($cn);
    if ($consulta) {
      header('Location: ../sideBarStaff.php');
    }

  }

 ?>
