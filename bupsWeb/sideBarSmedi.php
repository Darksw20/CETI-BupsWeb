<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Servicios M</title>
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
      <div id="sidebarCollapse" class="sidebar-header shadow-sm barral">
        <h3 class="text-center">EEAS Organizador</h3>
        <strong><i class="fas fa-user-circle fa-lg"></i></strong>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#" onclick="toggleVisibility('smFicha')" class="text-dark">
            <i class="fas fa-notes-medical fa-lg"></i>Ficha Medica
          </a>
        </li>
        <li>
          <a href="#" onclick="toggleVisibility('smMapa')" class="text-dark">
            <i class="fas fa-map-marked-alt fa-lg"></i>Mapa EEAS
          </a>
        </li>
        <li>
          <a href="#smincidenciast" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
            <i class="fas fa-address-card fa-lg"></i>Incidencias
          </a>
          <ul class="collapse list-unstyled" id="smincidenciast">
            <li>
              <a href="#" onclick="toggleVisibility('smIncidentes')" class="text-dark">Agregar Incidente</a >
              </li>
              <li>
                <a href="#"onclick="toggleVisibility('smIncidentesMostrar')"class="text-dark">Incidentes</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="src/proces-unlgn.php" class="text-dark">
            <i class="fas fa-user-circle fa-lg"></i>Cerrar sesión
          </a>
        </li>
      </ul>
    </nav>
    <!-- Page Content -->
    <div id="content" style="background: linear-gradient(to top left, #6600ff 0%, #cc99ff 100%);">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow barral" style="background: linear-gradient(to top left, #6600ff 0%, #cc33ff 100%)">
          <div class="container-fluid">
            <h4 class="mx-auto">
                Sistema de Encuentro, Expresion y Arte Scout.
              </h4>
          </div>
        </nav>
      </div>




      <div id="smFicha" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Ficha Medica</h4>
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

      <div id="smMapa" style="display: none; padding-top: 3rem;">
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
              <!-- <iframe class="embed-responsive-item" src ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.6875777672344!2d-103.39525917374276!3d20.708307817834683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae4c0728a2a3%3A0x675a6846f2b532c5!2sBosque+Colomos!5e0!3m2!1ses!2smx!4v1540356265341"></iframe>-->
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/u/0/embed?mid=1CZ6nTmGGJ8cdsVNIyBGvuPqjNrGIukdX"></iframe>
            </div>
            <!--tabla-->
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--mapa-->



      <!--agregar-->
      <div id="smIncidentes" style="display: none; padding-top: 3rem;">

        <div class="card w-100 mx-auto shadow">
          <div class="card-header bg-white text-center">
            <h4>Agregar Incidente</h4>
          </div>

          <div class="card-body">
            <form action="src/insertarIncidente.php" method="post" id="myForm">
              <h6 class="text-primary">Datos de los Incidentes</h6>
              <hr>
              <div class="form-row">
                <div class="col-md-3 mb-2">
                  <label for="titulo">Titulo</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="horaI">Hora</label>
                  <input type="date" class="form-control" id="horaI" name="horaI" placeholder="Hora" required>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="userI">Usuario</label>
                  <!-- Se necesita select para mostrar los usuarion-->
                  <select name="userI" class="form-control">
                    <?php

                                include('datos/conexion2.php');

                                $sql = "SELECT * FROM usuario ORDER BY CUM";
                                $result = mysqli_query($cn, $sql);

                                while ($fila = mysqli_fetch_array($result)) {
                                    $incidente = $fila["CUM"];
                                     echo  "
                                     <option value=".$incidente.">$incidente</option>
                                     ";
                                }

                            ?>
                  </select>
                </div>
                <div class="col-md-3 mb-2">
                  <label for="tipoI">Tipo</label>
                  <!-- Se necesita select para mostrar los incidentes-->
                  <select name="incidente" class="form-control">
                    <?php

                                include('datos/conexion2.php');

                                $sql = "SELECT * FROM incidentes";
                                $result = mysqli_query($cn, $sql);

                                while ($fila = mysqli_fetch_array($result)) {
                                    $incidente = $fila["PK_Incidentes"];
                                     echo  "
                                     <option value=".$incidente.">$incidente</option>
                                     ";
                                }

                            ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-9 mb-6">
                  <label for="descrip">Descripcion</label>
                  <textarea class="form-control" name="descrip" id="descrip" rows="4" cols="80" placeholder="Descripción" required></textarea>
                </div>
              </div>
              <hr>
              <button class="btn btn-primary" type="submit" id="addIncidente" name="addIncidente">Agregar Incidente</button>
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
      <div id="smIncidentesMostrar" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Modificar Incidente</h4>
          </div>
          <div class="card-body">
            <form action="src/verIncidentes.php" method="post" id="bIncidentes">
              <div class="form-row">
                <label for="buscarP">ID de incidente</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="buscarIncidente" name="buscarIncidente" placeholder="Nombre">
                </div>
              </div>
            </form>
            <form method="post">
              <div class="table-responsive" style="padding-top: 2rem;">
                <div id="live_data_incidente" style="padding-top: 1.2rem;"></div>
                <span id="result_incidente" style="padding-top: 1.2rem;"></span>
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
  </div>
  <!--contenido-->





  <script type="text/javascript">
    //control de panel lateral
    $(document).ready(function() {
      $("#sidebarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
      });
      $("#content").on("click", function() {
        $("#sidebar").addClass("active");
      });
    });
    //control de panel lateral

    //Mostrar la opcion de panel lateral
    var divs = ["smFicha", "smMapa", "smIncidentes", "smIncidentesMostrar"];
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
  </script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>

</html>
