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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script src="js/ajax.js" charset="utf-8"></script>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="shadow-lg barral">
      <div id="sidebarCollapse" class="sidebar-header shadow barral">
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
          <a href="#" onclick="toggleVisibility('userEdit')" class="text-dark">
            <i class="fas fa-address-card fa-lg"></i>Gestionar personal
          </a>
        </li>
        <li>
          <a href="#" onclick="toggleVisibility('adminEvento')" class="text-dark">
            <i class="fas fa-calendar fa-lg"></i>Evento
          </a>
        </li>
        <li>
          <a href="#ReportesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
            <i class="fas fa-sticky-note fa-lg"></i>Reportes
          </a>
          <ul class="collapse list-unstyled" id="ReportesSubmenu">
            <li>
              <a href="#" onclick="toggleVisibility('nuevoReporte')" class="text-dark">Nuevo</a>
            </li>
            <li>
              <a href="#" onclick="toggleVisibility('reportes')" class="text-dark">Reportes</a>
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

      <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxAdmin Menuxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
      <div id="adminDash" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-body">
            <canvas id="myChart"></canvas>
          </div>
          <!--CARD BODY-->
        </div>
        <!--CARD-->
      </div>

      <div id="userEdit" style="display: none; padding-top: 3rem;">

        <div class="card w-100 mx-auto shadow">
          <div class="card-header bg-white">
            <h4 class="text-center">Editar usuario</h4>
          </div>

          <div class="card-body">
            <form action="src/verUsuarios.php" method="post" id="buscarUser">
              <div class="form-row">
                <label for="buscarP">Nombre de usuarios</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="buscarUsuario" name="buscarUsuario" placeholder="Nombre">
                </div>
              </div>
            </form>
            <form method="post">
              <div class="table-responsive" style="padding-top: 2rem;">
                <div id="live_data_user" style="padding-top: 1.2rem;"></div>
                <span id="result_user" style="padding-top: 1.2rem;"></span>
              </div>
            </form>
            <!--tabla-->
          </div>
          <!--CARD BODY-->
        </div>
        <!--CARD-->
      </div>
      <!--organizador-->

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
                  <input type="text" class="form-control" id="eliminarUsuario" placeholder="JAL0720230">
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

      <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxAdmin Menuxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
      <div id="nuevoReporte" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Ganacias totales</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <label for="ganaciasorganizador">organizador</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="ganaciasorganizador" placeholder="Hewlett-Packard">
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
                    <th scope="col">organizador</th>
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

      <div id="reportes" style="display: none; padding-top: 3rem;">
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
                    <th scope="col">organizador</th>
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

      <div id="adminEvento" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Buscar Usuario</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <label for="eliminarUsuario">Nombre de usuario</label>
                <div class="input-group">
                  <input type="text" class="form-control mb-2" id="eliminarUsuario" placeholder="JAL0720230">
                  <div class="input-group-append">
                    <button class="btn btn-primary mb-2" type="submit">Buscar</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="embed-responsive embed-responsive-16by9 ">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.6875777672344!2d-103.39525917374276!3d20.708307817834683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae4c0728a2a3%3A0x675a6846f2b532c5!2sBosque+Colomos!5e0!3m2!1ses!2smx!4v1540356265341"></iframe>
            </div>
            <!--tabla-->
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--mapa-->

    </div>
    <!--Admin dash-->

  </div>
  <!--contenido-->

  <!--Modal confirmación organizador-->
  <div class="modal" id="modalConfirmacionorganizador">
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

  <!--Modal confirmación staff-->
  <div class="modal" id="modalConfirmacionstaff">
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
  <!--Modal confirmación satff-->

  <!--Modal confirmación servicioMedico-->
  <div class="modal" id="modalConfirmacionserviciomedico">
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
  <!--Modal confirmación servicio medico-->

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
      $('#content').on('click', function() {
        $('#sidebar').addClass('active');
      });

    });
    //control de panel lateral

    //Mostrar la opcion de panel lateral
    var divs = ["userEdit", "usuario", "cartagantt", "adminEvento", "nuevoReporte", "reportes", "inventario", "adminDash"];
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

    //Seleccionar formulario 2
    $(function() {
      $('#formSelect1').change(function() {
        $('.formulario').hide();
        $('#' + $(this).val()).show();
      });
    });
    //seleccionar formulario 2

    //Seleccionar formulario 3
    $(function() {
      $('#formSelect2').change(function() {
        $('.formulario').hide();
        $('#' + $(this).val()).show();
      });
    });
    //seleccionar formulario 3

    //graficas
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
        labels: ["Agosto", "Septiembre", "Octubre", "Novimbre", "Diciembre"],
        datasets: [{
          label: "39° EEAS 'Personas Registradas' ",
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [0, 1000, 4350, 7600, 11200],
        }]
      },

      // Configuration options go here
      options: {}
    });
  </script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>

</html>
