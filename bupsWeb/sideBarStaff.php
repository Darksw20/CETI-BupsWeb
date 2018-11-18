<?php
    include('datos/conexion2.php');
 ?>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="js/ajax.js" charset="utf-8"></script>
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
          <a href="#StaffAlmacen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
            <i class="fas fa-box-open fa-lg"></i>Almacen
          </a>
          <ul class="collapse list-unstyled" id="StaffAlmacen">
            <li>
              <a href="#" onclick="toggleVisibility('agregar')" class="text-dark">Agregar</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('inventario')" class="text-dark">Inventario</a>
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
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow barral" style="background: linear-gradient(to top left, #6600ff 0%, #cc33ff 100%)">
          <div class="container-fluid">
            <h4 class="mx-auto">Sistema de Encuentro, Expresion y Arte Scout. </h4>
          </div>
        </nav>
      </div>
      <!--carta gantt-->
      <div id="cartagantt" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Carta Gantt</h4>
          </div>
          <div class="card-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="imagenes/Sistema de Control para el Encuentro de Expresion y Arte Scout.pdf"></iframe>
            </div>
            <!--carta gantt-->
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--Carta Gantt-->

      <!--agregar-->
      <div id="agregar" style="display: block; padding-top: 3rem;">

        <div class="card w-100 mx-auto shadow">
          <div class="card-header bg-white text-center">
            <h4>Agregar material</h4>
          </div>

          <div class="card-body">
            <form action="src/insertarProd.php" method="post" id="myForm">
              <h6 class="text-primary">Datos de producto</h6>
              <hr>
              <div class="form-row">
                <div class="col-md-3 mb-2">
                  <label for="nombProd">Nombre</label>
                  <input type="text" class="form-control" id="nombProd" name="nombProd" placeholder="Nombre" required>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="price">Precio</label>
                  <input type="number" class="form-control" id="priceProd" name="priceProd" placeholder="Precio" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-9 mb-6">
                  <label for="descrip">Descripcion</label>
                  <textarea class="form-control" name="descrip" id="descrip" rows="4" cols="80" placeholder="Descripción" required></textarea>
                </div>
              </div>
              <hr>
              <button class="btn btn-primary" type="submit" id="addProd" name="addProd" onclick="">Agregar producto</button>
            </form>
            <div style="padding-top: 1.2rem;" id="result">
            </div>
          </div>
          <!--CARD BODY-->
        </div>
        <!--CARD-->
      </div>
      <!--agrefar-->

      <!--modificar-->
      <div id="inventario" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Modificar producto</h4>
          </div>
          <div class="card-body">
            <form action="src/verProductos.php" method="post" id="buscarStockProv">
              <div class="form-row">
                <label for="buscarP">ID de producto</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="buscarProdProveedor" name="buscarProdProveedor" placeholder="Nombre">
                </div>
              </div>
            </form>
            <form method="post">
              <div class="table-responsive" style="padding-top: 2rem;">
                <div id="live_data_prov" style="padding-top: 1.2rem;"></div>
                <span id="result_prov" style="padding-top: 1.2rem;"></span>
              </div>
            </form>
            <!--tabla-->
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--modificar-->
    </div>
    <!--contenido-->
  </div>
  <!--wrapper-->

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
      var divs = ["cartagantt", "agregar", "inventario"];
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

      //inputFile
      document.querySelector("html").classList.add('js');

      var fileInput = document.querySelector(".input-file"),
        button = document.querySelector(".input-file-trigger"),
        the_return = document.querySelector(".file-return");

      button.addEventListener("keydown", function(event) {
        if (event.keyCode == 13 || event.keyCode == 32) {
          fileInput.focus();
        }
      });
      button.addEventListener("click", function(event) {
        fileInput.focus();
        return false;
      });
      fileInput.addEventListener("change", function(event) {
        the_return.innerHTML = document.getElementById("my-file").files[0].name;;
      });
      //inputFile

      //tablaEdit
      $(document).ready(function() {
        $('#editable_table').Tabledit({
          url: 'action.php',
          columns: {
            identifier: [0, 'PK_Material'],
            editable: [
              [1, 'nomProd'],
              [2, 'Precio_Compra'],
              [3, 'Caracteristicas']
            ]
          },
          restoreButton: true,
          onSuccess: function(data, textStatus, jqXHR) {
            if (data.action == 'delete') {
              $('#' + data.idProducto).remove();
            }
          }
        });

      });
      //tablaEdit
    </script>

</body>

</html>
