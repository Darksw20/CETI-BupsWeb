<?php
    include('../datos/conexion2.php');

    $output = "";

    if (!empty($_POST['verStockIncidentes'])) {
        if ($buscar = $cn->real_escape_string($_POST['verStockIncidentes'])) {
            $sql = "SELECT * FROM relacion_incidentes WHERE Titulo LIKE '%".$buscar."%'";
            $resultado = $cn->query($sql);

            $output .= '
                    <div class="table-responsive">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="10%">ID Incidente</th>
                                   <th width="40%">Titulo</th>
                                   <th width="40%">Descripcion</th>
                                   <th width="40%">Fecha</th>
                                   <th width="40%">Usuario</th>
                                   <th width="40%">Num Incidente</th>

                              </tr>';

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_assoc()) {
                      $output .='
                              <tr>
                              <td>'.$row["PK_Incidente"].'</td>
                                 <td class="Titulo" data-id1="'.$row["PK_Incidente"].'" >'.$row["Titulo"].'</td>
                                 <td class="Descripcion" data-id2="'.$row["PK_Incidente"].'">'.$row["Descripcion"].'</td>
                                 <td class="Fecha" data-id3="'.$row["PK_Incidente"].'">'.$row["Hora"].'</td>
                                 <td class="FK_Usuario" data-id4="'.$row["PK_Incidente"].'">'.$row["FK_Usuario"].'</td>
                                 <td class="FK_Incidente" data-id5="'.$row["PK_Incidente"].'">'.$row["FK_Incidente"].'</td>
                              </tr>';
                }
            }
            $output .= '</table>
                      </div>';
            echo $output;
        } else {
            echo "Por favor, introduce un ID de un producto.";
        }
    }
?>
