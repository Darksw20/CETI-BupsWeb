<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Staff</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap 4/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap 4/adicionalAdmin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="shadow barral">
      <div class="sidebar-header shadow-sm barral">
        <h3 class="text-center">EEAS Staff</h3>
        <strong><i class="fas fa-user-circle fa-lg"></i></strong>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#" onclick="toggleVisibility('staffDash')" class="text-dark">
            <i class="fas fa-list-alt fa-lg"></i>Dashboard
          </a>
        </li>
        <li>
          <a href="#StaffAlmacen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
                <i class="fas fa-box-open fa-lg"></i>Almacen
          </a>
          <ul class="collapse list-unstyled" id="StaffAlmacen">
            <li>
              <a href="#" onclick="toggleVisibility('entradas')" class="text-dark">Entradas</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('salidas')" class="text-dark">Salidas</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('totales')" class="text-dark">Totales</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('merma')" class="text-dark">Merma</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="#" onclick="toggleVisibility('cartagantt')" class="text-dark">
            <i class="fas fa-archive fa-lg"></i>CartaGantt
          </a>
        </li>
        <li>
        <a href="src/proces-unlgn.php" class="text-dark">
          <i class="fas fa-user-circle fa-lg"></i>Cerrar sesión
        </a>
      </li>
      </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content" style="background: linear-gradient(to top left, #6600ff 0%, #cc99ff 100%);">
      <div class="container" >
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow barral" style="background: linear-gradient(to top left, #6600ff 0%, #cc33ff 100%)">
          <div class="container-fluid">
            <h4 class="mx-auto">Sistema de Encuentro, Expresion y Arte Scout. </h4>
          </div>
        </nav>
      </div>

      <div id="cartagantt" style="display: block; padding-top: 3rem;">
              <div class="card w-100 mx-auto shadow">
                <div class="card-header header bg-white text-center">
                  <h4>Carta Gantt</h4>
                </div>
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="imagenes/Sistema de Control para el Encuentro de Expresion y Arte Scout.pdf" ></iframe>
                    </div>
                    <!--carta gantt-->      
                </div> 
                <!--Card-body-->
              </div>
              <!--CARD-->
      </div>
      <!--Carta Gantt-->

      <div id="entradas" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
        <div class="card-header bg-white text-center">
          <h4>Agregar producto</h4>
        </div>

        <div class="card-body">
            <form action="#" method="post">
              <h6 class="text-primary">Datos de producto</h6>
              <hr>
              <div class="form-row">
                <div class="col-md-3 mb-2">
                  <label for="idprod">ID producto</label>
                  <input type="text" class="form-control" id="idprod" name="idProductoNuevo" required>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="nombreP">Nombre</label>
                  <input type="text" class="form-control" id="nombreP" name="nombreProducto" required>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="price">Precio</label>
                  <input type="text" class="form-control" id="price" name="precioProducto" required>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="formSelect0">Selecciona una categoría</label>
                  <select class="form-control" id="formSelect0" required>
                    <option value=""></option>
                    <option value="0">Aros</option>
                    <option value="1">Medicamento</option>
                    <option value="2">Rojos</option>
                    <option value="3">Escritorios</option>
                  </select>
                </div>
              </div>

              <div class="form-row" style="padding-bottom: 2rem;">
                <div class="col-md-9 mb-6">
                  <label for="descrip">Descripcion</label>
                  <textarea class="form-control" name="descripcion" rows="4" cols="80" required></textarea>
                </div>
                <div class="col-md-3 mb-3">
                  <p>Elige una imagen de producto</p>
                  <div class="input-file-container">
                    <input class="input-file" id="my-file" type="file" name="imagen" required>
                    <label tabindex="0" for="my-file" class="input-file-trigger">Elegir imagen</label>
                  </div>
                  <p class="file-return"></p>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Agregar producto</button>
            </form>

          </div>
          <!--CARD BODY-->
        </div>
        <!--CARD-->
      </div>
      <!--proveedor-->

      <!--modificar-->
      <div id="salidas" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
        <div class="card-header header bg-white text-center">
          <h4>Modificar producto</h4>
        </div>
        <div class="card-body">
          <form action="#" method="post">
            <div class="form-row" >
              <label for="modificarP">ID de producto</label>
              <div class="input-group">
                <input type="text" class="form-control" id="modificarP" placeholder="HP-1Z00WA" name="modificarProd">
              </div>
            </div>
          </form>
          <form method="post">
            <div class="table-responsive" style="padding-top: 2rem;">
              <table id="editable_table" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>ID producto</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoría</th>
                </tr>
              </thead>
              <tbody>
              <?php
              while($row = mysqli_fetch_array($result))
              {
                echo '
                <tr>
                <td>'.$row["PK_Material"].'</td>
                <td>'.$row["Precio_Compra"].'</td>
                <td>'.$row["descripcion"].'</td>
                <td>'.$row["FK_Tipo"].'</td>
                </tr>
                ';
              }
              ?>
              </tbody>
              </table>
            </div>
          </form>
        </div>
        <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--modificar-->

      <div id="totales"  style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Inventario en tienda</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="padding-top: 2rem;">
              <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoría</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>HP-1ZW00LA</td>
                    <td>Aros Hulaula</td>
                    <td>30</td>
                    <td class="text-success">$1,000</td>
                    <td>Recreativo</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--tabla-->
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--Inventario-->

      <div id="merma"  style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
        <div class="card-header header bg-white text-center">
          <h4>Eliminar producto</h4>
        </div>
        <div class="card-body">
          <form action="#" method="post">
            <div class="form-row">
              <label for="eliminarP">ID de producto</label>
              <div class="input-group">
                <input type="text" class="form-control" id="eliminarP" placeholder="HP-1ZW00LA" name="eliminarProducto">
              </div>
            </div>
          </form>
          <div class="table-responsive" style="padding-top: 2rem;">
            <table class="table table-hover table-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">ID Producto</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr data-toggle="modal" data-target="#modalConfirmacionProducto">
                  <td>HP-1ZW00LA</td>
                  <td>Aros Hulaula</td>
                  <td>Recreativo</td>
                  <td class="text-success">$1,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--tabla-->
        </div>
        <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--eliminar-->





      <!--Modal confirmación usuario-->
      <div class="modal" id="modalConfirmacionProducto">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">Confirmar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
            <div class="modal-body">
              <h4>¿Quieres eliminar el producto -ID- de la lista?</h4>
            </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="eliminarProv">Aceptar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
          </div>
      </div>
      <!--Modal confirmación-->

      </div>
      <!--Admin dash-->
    </div>
    <!--contenido-->

    <!--Modal confirmación proveedor-->
    <div class="modal" id="modalConfirmacionProveedor">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <!--Modal confirmación-->

    <!--Modal confirmación usuario-->
    <div class="modal" id="modalConfirmacionUsuario">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <!--Modal confirmación-->

    <script type="text/javascript">
      //control de panel lateral
      $(document).ready(function() {

        $('#sidebarCollapse').on('click', function() {
          $('#sidebar').toggleClass('active');
        });

      });
      //control de panel lateral

      //Mostrar la opcion de panel lateral
      var divs = ["cartagantt",   "entradas", "salidas", "totales", "merma"];
      var visibleDivId = null;

      function toggleVisibility(divId) {
        if (visibleDivId === divId) {
          visibleDivId = null;
        } else {
          visibleDivId = divId;
        }
        hideNonVisibleDivs();
      }

      function hideNonVisibleDivs() {
        var i, divId, div;
        for (i = 0; i < divs.length; i++) {
          divId = divs[i];
          div = document.getElementById(divId);
          if (visibleDivId === divId) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }
      //Mostrar la opcion de panel lateral

      //Seleccionar formulario
      $(function() {
        $('#formSelect0').change(function() {
          $('.formulario').hide();
          $('#' + $(this).val()).show();
        });
      });
      //seleccionar formulario
            //tablaEdit
            $(document).ready(function(){
           $('#editable_table').Tabledit({
            url:'action.php',
            columns:{
             identifier:[0, 'PK_Material'],
             editable:[[1, 'nomProd'], [2, 'Precio_Compra'], [3, 'Caracteristicas']]
            },
            restoreButton:true,
            onSuccess:function(data, textStatus, jqXHR)
            {
             if(data.action == 'delete')
             {
              $('#'+data.idProducto).remove();
             }
            }
           });

      });
      //tablaEdit
    </script>
</body>

</html>
