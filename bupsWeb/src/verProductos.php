<?php
    include('../datos/conexion2.php');

    $output = "";

    if (!empty($_POST['verStock'])) {
        if ($buscar = $cn->real_escape_string($_POST['verStock'])) {
            $sql = "SELECT * FROM material WHERE caracteristicas LIKE '%".$buscar."%'";
            $resultado = $cn->query($sql);

            $output .= '
                    <div class="table-responsive">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="10%">PK_Material</th>
                                   <th width="40%">Nombre</th>
                                   <th width="40%">Precio compra</th>
                                   <th width="40%">Caracteristicas</th>
                              </tr>';

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_assoc()) {
                      $output .='
                              <tr>
                              <td>'.$row["PK_Material"].'</td>
                                 <td class="Nombre" data-id1="'.$row["PK_Material"].'" contenteditable>'.$row["Nombre"].'</td>
                                 <td class="Precio_Compra" data-id2="'.$row["PK_Material"].'" contenteditable>'.$row["Precio_Compra"].'</td>
                                 <td class="Caracteristicas" data-id3="'.$row["PK_Material"].'" contenteditable>'.$row["Caracteristicas"].'</td>
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
