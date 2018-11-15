<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Servicios M</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap 4/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap 4/adicionalAdmin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="shadow barral">
            <div id="sidebarCollapse"class="sidebar-header shadow-sm barral">
              <h3 class="text-center">EEAS Organizador</h3>
              <strong><i class="fas fa-user-circle fa-lg"></i></strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#" onclick="toggleVisibility('smDash')" class="text-dark">
                        <i class="fas fa-list-alt fa-lg"></i>Dashboard
                    </a>
                </li>
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
                    <a href="#" onclick="toggleVisibility('smIncidentes')" class="text-dark">
                            <i class="fas fa-band-aid fa-lg"></i>Incidentes
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
      <div
        id="content"
        style="background: linear-gradient(to top left, #6600ff 0%, #cc99ff 100%);">
        <div class="container">
          <nav
            class="navbar navbar-expand-lg navbar-light bg-white shadow barral"
            style="background: linear-gradient(to top left, #6600ff 0%, #cc33ff 100%)">
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
                  <iframe class="embed-responsive-item" src="imagenes/Sistema de Control para el Encuentro de Expresion y Arte Scout.pdf" ></iframe>
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
                      <iframe class="embed-responsive-item" src ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.6875777672344!2d-103.39525917374276!3d20.708307817834683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae4c0728a2a3%3A0x675a6846f2b532c5!2sBosque+Colomos!5e0!3m2!1ses!2smx!4v1540356265341"></iframe>
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
        var divs = ["smFicha","smMapa","proveedor", "usuario", "gananciasTotales", "gananciasProducto", "inventario", "adminDash"];
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
        $(function () {
            $('#formSelect0').change(function () {
                $('.formulario').hide();
                $('#' + $(this).val()).show();
            });
        });
      //seleccionar formulario

    </script>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>

</html>