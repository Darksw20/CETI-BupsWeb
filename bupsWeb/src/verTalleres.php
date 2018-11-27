
<?php
    include('../datos/conexion2.php');

    $output = "";

    echo "string";

    if (!empty($_POST['verStockTaller'])) {
        if ($buscar = $cn->real_escape_string($_POST['verStockTaller'])) {
            $sql = "SELECT * FROM talleres WHERE Nombre_Taller LIKE '%".$buscar."%'";
            $resultado = $cn->query($sql);

            $output .= '
                    <div class="table-responsive">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="10%">ID Taller</th>
                                   <th width="40%">Encargado</th>
                                   <th width="40%">Descripcion</th>
                                   <th width="40%">Actividad</th>
                                   <th width="40%">Limite</th>
                                   <th width="40%">Horio</th>
                                   <th width="40%">Nombre de taller</th>
                                   <th width="40%">Localizacion</th>
                              </tr>';

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_assoc()) {
                      $output .='
                              <tr>
                              <td>'.$row["PK_Taller"].'</td>
                                 <td class="Encargado" data-id1="'.$row["PK_Taller"].'" contenteditable>'.$row["Encargado"].'</td>
                                 <td class="Descripcion" data-id2="'.$row["PK_Taller"].'" contenteditable>'.$row["Descripcion"].'</td>
                                 <td class="Caracteristicas" data-id3="'.$row["PK_Taller"].'" contenteditable>'.$row["TallerAct"].'</td>
                                 <td class="Limite" data-id4="'.$row["PK_Taller"].'" contenteditable>'.$row["Limite"].'</td>
                                 <td class="Horario" data-id5="'.$row["PK_Taller"].'" contenteditable>'.$row["Horario"].'</td>
                                  <td class="Nombre_Taller" data-id7="'.$row["PK_Taller"].'" contenteditable>'.$row["Nombre_Taller"].'</td>
                                  <td class="FK_Localizacion" data-id8="'.$row["PK_Taller"].'" contenteditable>'.$row["FK_Localizacion"].'</td>
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
