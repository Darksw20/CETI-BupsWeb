<?php
    include('../datos/conexion2.php');

    $output = "";

    if (!empty($_POST['verStockUsuario'])) {
        if ($buscar = $cn->real_escape_string($_POST['verStockUsuario'])) {
            $sql = "SELECT * FROM usuario WHERE CUM LIKE '%".$buscar."%'";
            $resultado = $cn->query($sql);

            $output .= '
                    <div class="table-responsive">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="10%">CUM</th>
                                   <th width="10%">Tipo de usuario</th>
                                   <th width="40%">Nombre</th>
                                   <th width="40%">Apellido paterno</th>
                                   <th width="40%">Apellido materno</th>
                                   <th width="40%">Contraseña</th>
                              </tr>';

            if (mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_assoc()) {
                      $output .='
                              <tr>
                              <td>'.$row["CUM"].'</td>
                                 <td class="Tipo_Usuario" data-id1="'.$row["CUM"].'" contenteditable>'.$row["Tipo_Usuario"].'</td>
                                 <td class="Nombre" data-id2="'.$row["CUM"].'">'.$row["Nombre"].'</td>
                                 <td class="A_Pat" data-id3="'.$row["CUM"].'">'.$row["A_Pat"].'</td>
                                 <td class="A_Mat" data-id4="'.$row["CUM"].'">'.$row["A_Mat"].'</td>
                                 <td class="Password" data-id5="'.$row["CUM"].'" contenteditable>'.$row["Password"].'</td>
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
