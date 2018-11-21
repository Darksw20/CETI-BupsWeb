<?php

include('datos/conexion2.php');


 ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8" />
    <title>Organizador</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap 4/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap 4/adicionalAdmin.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="js/ajax.js" charset="utf-8"></script>
    <script>
          var centesimas = 0;
        var segundos = 0;
        var minutos = 0;
        var horas = 0;
        function inicio () {
          control = setInterval(cronometro,10);
          document.getElementById("inicio").disabled = true;
          document.getElementById("parar").disabled = false;
          document.getElementById("continuar").disabled = true;
          document.getElementById("reinicio").disabled = false;
        }
        function parar () {
          clearInterval(control);
          document.getElementById("parar").disabled = true;
          document.getElementById("continuar").disabled = false;
        }
        function reinicio () {
          clearInterval(control);
          centesimas = 0;
          segundos = 0;
          minutos = 0;
          horas = 0;
          Centesimas.innerHTML = ":00";
          Segundos.innerHTML = ":00";
          Minutos.innerHTML = ":00";
          Horas.innerHTML = "00";
          document.getElementById("inicio").disabled = false;
          document.getElementById("parar").disabled = true;
          document.getElementById("continuar").disabled = true;
          document.getElementById("reinicio").disabled = true;
        }
        function cronometro () {
          if (centesimas < 99) {
            centesimas++;
            if (centesimas < 10) { centesimas = "0"+centesimas }
            Centesimas.innerHTML = ":"+centesimas;
          }
          if (centesimas == 99) {
            centesimas = -1;
          }
          if (centesimas == 0) {
            segundos ++;
            if (segundos < 10) { segundos = "0"+segundos }
            Segundos.innerHTML = ":"+segundos;
          }
          if (segundos == 59) {
            segundos = -1;
          }
          if ( (centesimas == 0)&&(segundos == 0) ) {
            minutos++;
            if (minutos < 10) { minutos = "0"+minutos }
            Minutos.innerHTML = ":"+minutos;
          }
          if (minutos == 59) {
            minutos = -1;
          }
          if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
            horas ++;
            if (horas < 10) { horas = "0"+horas }
            Horas.innerHTML = horas;
          }
        }
          
  </script>
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar" class="shadow barral">
        <div id="sidebarCollapse" class="sidebar-header shadow-sm barral">
          <h3 class="text-center">EEAS Organizador</h3>
          <strong><i class="fas fa-user-circle fa-lg"></i></strong>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="#" onclick="toggleVisibility('orgaDash')" class="text-dark">
              <i class="fas fa-list-alt fa-lg"></i>Dashboard
            </a>
          </li>
          <li>
            <a href="#" onclick="toggleVisibility('usuario')" class="text-dark">
              <i class="fas fa-address-card fa-lg"></i>Gestionar personal
            </a>
          </li>
          <li>
            <a
              href="#"
              onclick="toggleVisibility('orgaEvento')"
              class="dropdown-toggle text-dark"
            >
              <i class="fas fa-calendar fa-lg"></i>Evento
            </a>
              </li>
              <li>
                <a href="#" onclick="toggleVisibility('geolocalizacion')" class="text-dark">
                <i class="fas fa-map-marker fa-lg"></i>Geolocalización
                </a>
                </li>
              <li>
                <a href="#talleresOrga" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">
                  <i class="fas fa-address-card fa-lg"></i>Talleres y Torneos
                </a>
                <ul class="collapse list-unstyled" id="talleresOrga">
                  <li>
                    <a href="#" onclick="toggleVisibility('agregarTaller')" class="text-dark">Agregar Taller</a
                >
              </li>
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('talleres')"
                  class="text-dark"
                  >Talleres</a
                >
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#ReportesSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle text-dark"
            >
              <i class="fas fa-sticky-note fa-lg"></i>Reportes
            </a>
                    <ul class="collapse list-unstyled" id="ReportesSubmenu">
                      <li>
                        <a href="#" onclick="toggleVisibility('añadirReporte')" class="text-dark">Nuevo</a
                >
              </li>
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('verReporte')"
                  class="text-dark"
                  >Reportes</a
                >
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#"
              onclick="toggleVisibility('cartagantt')"
              class="text-dark"
            >
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

      <!-- Page Content -->
      <div id="content" style="background: linear-gradient(to top left, #6600ff 0%, #cc99ff 100%);" p>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-white shadow barral" style="background: linear-gradient(to top left, #6600ff 0%, #cc33ff 100%)">
            <div class="container-fluid">
              <h4 class="mx-auto">
                Sistema de Encuentro, Expresion y Arte Scout.
              </h4>
            </div>
          </nav>
        </div>

        <!--
          xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxAdmin Menuxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
        -->
        <div id="orgaDash" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-body">
              <canvas id="myChart"></canvas>
            </div>
            <!-- CARD BODY -->
          </div>
          <!-- CARD -->
        </div>

        <div id="usuario" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header header bg-white text-center">
              <h4>Eliminar usuario</h4>
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
            <!-- Card-body -->
          </div>
          <!-- CARD -->
        </div>
        <!-- Usuario -->



            <!--agregar-->
            <div id="añadirReporte" style="display: none; padding-top: 3rem;"> 

                <div class="card w-100 mx-auto shadow">
                <div class="card-header bg-white text-center">
                <h4>Agregar Reporte</h4>
                </div>

                <div class="card-body">
                <form action="src/insertarIncidente.php" method="post" id="myForm">
                <h6 class="text-primary">Datos de los Reportes</h6>
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
                <label for="userI">Usuario</label> <!-- Se necesita select para mostrar los usuarion-->
                <select name="userI" class ="form-control"> 
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
                <label for="tipoI">Tipo</label><!-- Se necesita select para mostrar los incidentes-->
                        <select name="incidente" class ="form-control"> 
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
                <button class="btn btn-primary" type="submit" id="addIncidente" name="addIncidente" >Agregar Reporte</button>
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
                 <div id="verReporte" style="display: none; padding-top: 3rem;">
                    <div class="card w-100 mx-auto shadow">
                        <div class="card-header header bg-white text-center">
                        <h4>Modificar Reporte</h4>
                        </div>
                        <div class="card-body">
                        <form action="src/verIncidentes.php" method="post" id="bIncidentes">
                            <div class="form-row">
                            <label for="buscarP">ID de Reporte</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="buscarIncidente" name="buscarIncidente" placeholder="Nombre">
                            </div>
                            </div>
                        </form>
                        <form method="post">
                            <div class="table-responsive" style="padding-top: 2rem;">
                            <div id="live_data_taller" style="padding-top: 1.2rem;"></div>
                            <span id="result_taller" style="padding-top: 1.2rem;"></span>
                            </div>
                        </form>
                        <!--tabla-->
                        </div>
                        <!--Card-body-->
                        </div>
                        <!--CARD-->
                </div>
                    <!--modificar-->


      <div id="geolocalizacion" style="display: none; padding-top: 3rem;">
        <div class="card w-100 mx-auto shadow">
          <div class="card-header header bg-white text-center">
            <h4>Contador Finalizar Evento</h4>
          </div>
          <div class="card-body">
              <div id="contenedor">
              <div class="form-row">
                <div class="col-md-3 mb-2" id="Horas">00</div>
                <div class="col-md-3 mb-2" id="Minutos">:00</div>
                <div class="col-md-3 mb-2" id="Segundos">:00</div>
                <div class="col-md-3 mb-2" id="Centesimas">:00</div>
                </div>
                <input type="button" class="boton btn btn-success" id="inicio" value="Start &#9658;" onclick="inicio();">
                <input type="button" class="boton btn btn-danger" id="parar" value="Stop &#8718;" onclick="parar();" disabled>
                <input type="button" class="boton btn btn-light" id="continuar" value="Resume &#8634;" onclick="inicio();" disabled>
                <input type="button" class="boton btn btn-light" id="reinicio" value="Reset &#8635;" onclick="reinicio();" disabled>
            </div>

            <!--carta contador-->
          </div>
          <!--Card-body-->
        </div>
        <!--CARD-->
      </div>
      <!--Carta geolocalizacion-->















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

        <div id="orgaEvento" style="display: none; padding-top: 3rem;">
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
                <!--<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.6875777672344!2d-103.39525917374276!3d20.708307817834683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae4c0728a2a3%3A0x675a6846f2b532c5!2sBosque+Colomos!5e0!3m2!1ses!2smx!4v1540356265341"></iframe>-->
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
        <div id="agregarTaller" style="display: block; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header bg-white text-center">
              <h4>Agregar Taller</h4>
            </div>
            <div class="card-body">
              <form action="src/insertarTaller.php" method="post" id="myForm">
                <h6 class="text-primary">Datos del Taller</h6>
                <hr>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="nomTaller">Nombre</label>
                    <input type="text" class="form-control" id="nomTaller" name="nomTaller" placeholder="Nombre" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="encargado">Encargado</label>
                    <input type="text" class="form-control" id="encargado" name="encargado" placeholder="Encargado" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="price">Actividad</label>
                    <input type="text" class="form-control" id="actividad" name="actividad" placeholder="Actividad" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="price">Limite</label>
                    <input type="number" class="form-control" id="limite" name="limite" placeholder="Limite" required>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="horario">Hora inicio</label>
                    <input type="time" class="form-control" id="horaInicio" name="horaInicio" required>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="horario">Hora fin</label>
                    <input type="time" class="form-control" id="horaFin" name="horaFin" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-9 mb-6">
                    <label for="descrip">Descripcion</label>
                    <textarea class="form-control" name="descrip" id="descrip" rows="4" cols="80" placeholder="Descripción" required></textarea>
                  </div>
                </div>
                <hr>
                <button class="btn btn-primary" type="submit" id="addTaller" name="addTaller" onclick="">Agregar Taller</button>
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
        <div id="talleres" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header header bg-white text-center">
              <h4>Modificar Taller</h4>
            </div>
            <div class="card-body">
              <form action="src/verTalleres.php" method="post" id="bTalleres">
                <div class="form-row">
                  <label for="buscarP">ID de taller</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="buscarTaller" name="buscarTaller" placeholder="Nombre">
                  </div>
                </div>
              </form>
              <form method="post">
                <div class="table-responsive" style="padding-top: 2rem;">
                  <div id="live_data_taller" style="padding-top: 1.2rem;"></div>
                  <span id="result_taller" style="padding-top: 1.2rem;"></span>
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

    <!-- Admin dash -->

    <!-- Modal confirmación staff -->
    <div class="modal" id="modalConfirmacionStaff">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">
              Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal confirmación -->

    <!-- Modal confirmación servicioMedico -->
    <div class="modal" id="modalConfirmacionServicioMedico">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">
              Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal confirmación -->

    <!-- Modal confirmación usuario -->
    <div class="modal" id="modalConfirmacionUsuario">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">
              Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal confirmación -->

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
      var divs = [
        "usuario",
        "añadirReporte",
        "verReporte",
        "orgaDash",
        "cartagantt",
        "orgaEvento",
        "agregarTaller",
        "talleres",
        "geolocalizacion"
      ];
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

      //Seleccionar formulario1
      $(function() {
        $("#formSelect0").change(function() {
          $(".formulario").hide();
          $("#" + $(this).val()).show();
        });
      });
      //seleccionar formulario1
      //Seleccionar formulario2
      $(function() {
        $("#formSelect1").change(function() {
          $(".formulario").hide();
          $("#" + $(this).val()).show();
        });
      });
      //seleccionar formulario2
      //Seleccionar formulario3
      $(function() {
        $("#formSelect2").change(function() {
          $(".formulario").hide();
          $("#" + $(this).val()).show();
        });
      });
      //seleccionar formulario3

      //graficas
      var ctx = document.getElementById("myChart").getContext("2d");
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: "line",

        // The data for our dataset
        data: {
          labels: ["Agosto", "Septiembre", "Octubre", "Novimbre", "Diciembre"],
          datasets: [{
            label: "39° EEAS 'Personas Registradas' ",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            data: [0, 1000, 4350, 7600, 11200]
          }]
        },

        // Configuration options go here
        options: {}
      });
    </script>
  </body>

  </html>
