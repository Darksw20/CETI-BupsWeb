<?php

  include('../datos/conexion2.php');

  $encargado = $cn->real_escape_string($_POST["encargado"]);
  $descripcion = $cn->real_escape_string($_POST["descrip"]);
  $actividad = $cn->real_escape_string($_POST["actividad"]);
  $limite = $cn->real_escape_string($_POST["limite"]);
  $horaInicio = $cn->real_escape_string($_POST["horaInicio"]);
  $horaFin = $cn->real_escape_string($_POST["horaFin"]);
  $nombre = $cn->real_escape_string($_POST["nomTaller"]);
  //$tipo = $cn->real_escape_string($_POST["tipo"]);

  //var_dump($_POST);

  if (isset($_POST["addTaller"])) {
    $sql = "INSERT INTO talleres (PK_Taller, Encargado, Descripcion, TallerAct, Limite, Horario, Horario_Fin, Nombre_Taller)
    VALUES ('', '$encargado', '$descripcion', '$actividad', '$limite', '$horaInicio', '$horaFin', '$nombre')";

    var_dump($sql);

    $result = mysqli_query($cn, $sql).mysqli_error($cn);
    if ($result) {
      header('Location: ../sideBarOrga.php');
    }
  }else {
    echo "no xd";
  }

 ?>
