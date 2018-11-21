<?php

include('../datos/conexion2.php');

  $titulo = $cn->real_escape_string($_POST["titulo"]);
  $hora = $cn->real_escape_string($_POST["horaI"]);
  $descripcion = $cn->real_escape_string($_POST["descrip"]);
  $fk_usuario = $cn->real_escape_string($_POST["userI"]);
  $fk_incidente = $cn->real_escape_string($_POST["incidente"]);

  if (isset($_POST["addReporte"])){

    $sql = "INSERT INTO relacion_incidentes (PK_Incidente, Titulo, Descripcion, Hora, FK_Usuario, FK_Incidente) VALUES ('', '$titulo', '$descripcion', '$hora', '$fk_usuario', '$fk_incidente')";
    $consulta = mysqli_query($cn, $sql).mysqli_error($cn);
    var_dump($consulta);
    if ($consulta) {
      header('Location: ../sideBarOrga.php');
    }

  }

 ?>
