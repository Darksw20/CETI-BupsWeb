<?php
    include('../datos/conexion2.php');

    $output = "";

    if (!empty($_POST['verStockTaller'])) {
        if ($buscar = $cn->real_escape_string($_POST['verStockTaller'])) {
            $sql = "SELECT * FROM relacion_incidentes WHERE Titulo LIKE '%".$buscar."%'";
            $resultado = $cn->query($sql);

            $output .= '
                    <div class="table-responsive">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="10%">ID Incidente</th>
                                   <th width="40%">Titulo</th>
                                   <th width="40%">Descripcion</th>
                                   <th width="40%">Hora</th>
                                   <th width="40%">Usuario</th>
                                   <th width="40%">Num Incidente</th>

                              </tr>';

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_assoc()) {
                      $output .='
                              <tr>
                              <td>'.$row["PK_Incidente"].'</td>
                                 <td class="Encargado" data-id1="'.$row["PK_Incidente"].'" contenteditable>'.$row["Titulo"].'</td>
                                 <td class="Descripcion" data-id2="'.$row["PK_Incidente"].'" contenteditable>'.$row["Descripcion"].'</td>
                                 <td class="Hora" data-id3="'.$row["PK_Incidente"].'" contenteditable>'.$row["TallerAct"].'</td>
                                 <td class="FK_Usuario" data-id4="'.$row["PK_Incidente"].'" contenteditable>'.$row["FK_Usuario"].'</td>
                                 <td class="FK_Incidente" data-id5="'.$row["PK_Incidente"].'" contenteditable>'.$row["FK_Incidente"].'</td>
                              </tr>';
                }
            }
            $output .= '</table>
                      </div>';
            echo $output;
        } else {
            echo "Por favor, introduce un ID de un producto.";
        }
    }else {
      echo "no";
    }
?>
