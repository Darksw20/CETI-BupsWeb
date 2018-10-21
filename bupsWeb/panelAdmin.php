<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admin</title>
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
    <nav id="sidebar" class="shadow">
      <div class="sidebar-header shadow-sm">
        <h3 class="text-center">EEAS Administrador</h3>
        <strong><i class="fas fa-user-circle fa-lg"></i></strong>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#" onclick="toggleVisibility('adminDash')" class="text-dark">
            <i class="fas fa-list-alt fa-lg"></i>Dashboard
          </a>
        </li>
        <li>
          <a href="#AdminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
            <i class="fas fa-address-card fa-lg"></i>Gestionar Personal
          </a>
          <ul class="collapse list-unstyled" id="AdminSubmenu">
            <li>
              <a href="#" onclick="toggleVisibility('proveedor')" class="text-dark">Organizador</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('staff')" class="text-dark">Staff</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('serviciomedico')" class="text-dark">ServicioMedico</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('usuario')" class="text-dark">Usuario</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#ReportesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
          <i class="fas fa-sticky-note fa-lg"></i>Reportes
          </a>
          <ul class="collapse list-unstyled" id="ReportesSubmenu">
            <li>
              <a href="#" onclick="toggleVisibility('gananciasTotales')" class="text-dark">Nuevo</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('gananciasProducto')" class="text-dark">Reportes</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" onclick="toggleVisibility('cartagantt')" class="text-dark">
            <i class="fas fa-archive fa-lg"></i>CartaGantt
          </a>
        </li>
      </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow rounded">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span></span>
          </button>
          <h4 class="mx-auto">Hola, administrador</h4>
        </div>
      </nav>

      <div id="proveedor" style="display: none; padding-top: 3rem;">

        <div class="card w-100 mx-auto shadow">
          <div class="card-header bg-white">
            <select class="custom-select" id="formSelect0">
              <option value="0">Agregar proveedor</option>
              <option value="1">Eliminar proveedor</option>
            </select>
          </div>

          <div class="card-body">
            <div id="0" class="formulario 0">
              <form>
                <h6 class="text-primary">Datos de ususario</h6>
                <hr>
                <div class="form-row">
                  <div class="col-md-3 mb-2">
                    <label for="validationDefault01">Nombre</label>
                    <input type="text" class="form-control" id="validationDefault01" required>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="validationDefault02">Apellido Paterno</label>
                    <input type="text" class="form-control" id="validationDefault02" required>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="validationDefault03">Apellido Materno</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="validationDefault03">Telefono</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Correo</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Contraseña</label>
                    <input type="text" class="form-control" id="validationDefault04" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault05">Nombre de usuario</label>
                    <input type="text" class="form-control" id="validationDefault05" required>
                  </div>
                </div>

                <h6 class="text-primary">Domicilio</h6>
                <hr>
                <div class="form-row">
                  <div class="col-md-4 mb-2">
                    <label for="validationDefault01">Calle</label>
                    <input type="text" class="form-control" id="validationDefault01" required>
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="validationDefault02">Numero</label>
                    <input type="text" class="form-control" id="validationDefault02" required>
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="validationDefault03">colonia</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="validationDefault03">Código postal</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                </div>

                <button class="btn btn-primary" type="submit">Agregar proveedor</button>
              </form>
            </div>
            <!--formulario 0-->

            <div id="1" class="formulario 1" style="display: none;">
              <form>
                <div class="form-row">
                  <label for="eliminarUsuario">Nombre de usuario</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="eliminarUsuario" placeholder="nombre_empresa">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">buscar</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="table-responsive" style="padding-top: 2rem;">
                <table class="table table-hover table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Nombre de usuario</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Tipo de usuario</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido paterno</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-toggle="modal" data-target="#modalConfirmacionProveedor">
                      <td>ejemploEmpresa</td>
                      <td>ejemplo@empresa.com</td>
                      <td>Proveedor (1)</td>
                      <td>Juan</td>
                      <td>González</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--formulario 1-->
          </div>
          <!--CARD BODY-->
        </div>
        <!--CARD-->
      </div>
      <!--proveedor-->

      <div id="usuario" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Eliminar usuario</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <label for="eliminarUsuario">Nombre de usuario</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="eliminarUsuario" placeholder="yisusChrist98">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="table-responsive" style="padding-top: 2rem;">
              <table class="table table-hover table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Tipo de usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-toggle="modal" data-target="#modalConfirmacionUsuario">
                    <td>ejemploUsuario</td>
                    <td>ejemplo@usuario.com</td>
                    <td>Usuario (0)</td>
                    <td>el</td>
                    <td>wey</td>
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
      <!--Usuario-->

      <div id="gananciasTotales" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Ganacias totales</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <label for="ganaciasProveedor">Proveedor</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="ganaciasProveedor" placeholder="Hewlett-Packard">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="table-responsive" style="padding-top: 2rem;">
              <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Ingreso generado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Intel</td>
                    <td class="text-success">$30,000,000</td>
                  </tr>
                  <tr>
                    <td>Hewlett-Packard</td>
                    <td class="text-success">$50,000,000</td>
                  </tr>
                  <tr>
                    <td>Nvidia</td>
                    <td class="text-success">$10,000,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--tabla-->
            <div class="container bg-light rounded shadow-sm" style="padding: 20px;">
              <h6>Ingreso total</h6>
              <hr>
              <h5 class="text-success">
                <i class="fas fa-dollar-sign fa-lg"></i> 90,000,000
              </h5>
            </div>
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--gananciasTotales-->

      <div id="gananciasProducto" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Ganacias por producto</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <label for="idProducto">Id de producto</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="idProducto" placeholder="HP-1ZW00LA">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="table-responsive" style="padding-top: 2rem;">
              <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Productos vendidos</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>HP-1ZW00LA</td>
                    <td>HP OMEN 15</td>
                    <td>Hewlett-Packard</td>
                    <td>3</td>
                    <td class="text-success">$72,000</td>
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
      <!--ganacias por producto-->

      <div id="inventario" style="display: none; padding-top: 3rem;">
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
                    <td>HP OMEN 15</td>
                    <td>30</td>
                    <td class="text-success">$24,000</td>
                    <td>Laptops</td>
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

      <div id="adminDash" style="display: block; padding-top: 3rem;">
        <div class="row">
          <div class="col-md-5 mb-2">
            <div class="card bg-gradGreen shadow-sm" style="border:none;">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="text-white">Transacciones del día</h6>
                  </div>
                  <div class="col">
                    <h5 class="text-right text-white"><i class="fas fa-exchange-alt"></i></h5>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-2">
            <div class="card bg-gradRed shadow-sm" style="border:none;">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="text-white">Total de productos</h6>
                  </div>
                  <div class="col">
                    <h5 class="text-right text-white"><i class="fas fa-shopping-cart"></i></i></h5>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-2">
            <div class="card bg-gradBlue shadow-sm" style="border:none;">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="text-white">Total de usuarios</h6>
                  </div>
                  <div class="col">
                    <h5 class="text-right text-white"><i class="fas fa-users"></i></h5>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-2">
            <div class="card bg-gradYellow shadow-sm" style="border:none;">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="text-white">Total de proveedores</h6>
                  </div>
                  <div class="col">
                    <h5 class="text-right text-white"><i class="fas fa-user-tie"></i></h5>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
        <!--row-->

        <!--row-->
        <div class="row">
          <div class="col-md-9 mb-6">
            <div class="card bg-white rounded shadow-sm">
            </div>
          </div>
        </div>
        <!--row-->

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
      var divs = ["proveedor", "usuario", "gananciasTotales", "gananciasProducto", "inventario", "adminDash"];
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
      
    </script>
</body>

</html>
