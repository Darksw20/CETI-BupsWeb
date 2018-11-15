<?php

    include ('../datos/conexion.php');
    include ('../datos/insertar.php');

   // var_dump($_POST);
    if (isset($_POST['cum']))
    {
        $model =  new insertar();
        $model->Nombre = htmlspecialchars($_POST['nombre']);
        $model->CUM = htmlspecialchars($_POST['cum']);
        $model->A_Pat = htmlspecialchars($_POST['ap_pa']);
        $model->A_Mat = htmlspecialchars($_POST['ap_ma']);
        $model->Sexo = htmlspecialchars($_POST['sexo']);
        $model->F_Nac = htmlspecialchars($_POST['fechadenacimiento']);
        $model->Vigencia = htmlspecialchars($_POST['vigenciascout']);
        $model->Provincia = htmlspecialchars($_POST['provincia']);
        $model->Grupo_S = htmlspecialchars($_POST['grupo']);
        $model->Seccion = htmlspecialchars($_POST['seccion']);
        $model->Scouter_Responsable = htmlspecialchars($_POST['scouterR']);
        $model->Tel_Cel = htmlspecialchars($_POST['celular']);
        $model->Password =sha1(htmlspecialchars($_POST['passuser']));
        $model->Estatura = htmlspecialchars($_POST['estatura']);
        $model->Peso = htmlspecialchars($_POST['peso']);
        $model->Color_Cabello = htmlspecialchars($_POST['color_cabello']);
        $model->Color_Ojos = htmlspecialchars($_POST['color_ojos']);
        $model->Color_Piel = htmlspecialchars($_POST['color_piel']);
        $model->Tipo_Sangre = htmlspecialchars($_POST['tiposangre']);
        $model->Donar_Sangre = htmlspecialchars($_POST['donarsangre']);
        $model->Dieta = htmlspecialchars($_POST['dieta']);
        $model->Alcohol = htmlspecialchars($_POST['bebealcohol']);
        $model->Fumador = htmlspecialchars($_POST['fuma']);
        $model->Uso_Sustancias = htmlspecialchars($_POST['sustanciasrecreativas']);
        $model->Fam_Diabetes = htmlspecialchars($_POST['familiadiabetes']);
        $model->Fam_Hipertension = htmlspecialchars($_POST['familiahipertension']);
        $model->Afecciones_Frio_Calor = htmlspecialchars($_POST['afecciones']);
        //$model->Fk_Info_Emergencia = htmlspecialchars($_POST['1']);
        //$model->Fk_Regnal = htmlspecialchars($_POST['jalo000001']);
        $model->Tipo_Usuario = htmlspecialchars($_POST['tipouser']);
        $model->Nomb_Cont_Emerg = htmlspecialchars($_POST['contactoemergencia']);
        $model->Dir_Cont_Emerg = htmlspecialchars($_POST['diremergencia']);
        $model->Tel_Cont_Emerg = htmlspecialchars($_POST['telefonoemergencia']);
        $model->insert();
        //var_dump($model);
        $_POST = array();
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../Css/estilo.css">

    <script>
        $(document).ready(function () {
            var current = 1, current_step, next_step, steps;
            steps = $(".forcu").length;
            $(".next").click(function () {
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            });
            $(".previous").click(function () {
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            });
            setProgressBar(current);
            // Change progress bar action
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
                    .html(percent + "%");
            }
        });     
    </script>
    <!--Script para hacer que el formulario sea por pasos-->
    <script>

        function mostrarReferencia() {
            if (document.fscouts.segurop[0].checked == true) {
                document.getElementById('seguritos').style.display = 'block';
            } else {
                document.getElementById('seguritos').style.display = 'none';
            }
        }
        //formulario exclusivo para mujer
        function mostrarFormMujer() {
            if (document.fscouts.sexo[1].checked == true) {
                document.getElementById('mujercita').style.display = 'block';
            } else {
                document.getElementById('mujercita').style.display = 'none';
            }
        }
        //formulario exclusivo para mujer
        //part3
        function mostrarForm3Campos() {
            if (document.fscouts.fracturas[0].checked == true) {
                document.getElementById('fracturita').style.display = 'block';
            } else {
                document.getElementById('fracturita').style.display = 'none';
            }
            if (document.fscouts.procirculatorios[0].checked == true) {
                document.getElementById('pcirculatorios').style.display = 'block';
            } else {
                document.getElementById('pcirculatorios').style.display = 'none';
            }
            if (document.fscouts.enferespiratorias[0].checked == true) {
                document.getElementById('erespiratorias').style.display = 'block';
            } else {
                document.getElementById('erespiratorias').style.display = 'none';
            }
            if (document.fscouts.alerconocidas[0].checked == true) {
                document.getElementById('alergias').style.display = 'block';
            } else {
                document.getElementById('alergias').style.display = 'none';
            }
            if (document.fscouts.enfeinmunes[0].checked == true) {
                document.getElementById('enfermedadinmune').style.display = 'block';
            } else {
                document.getElementById('enfermedadinmune').style.display = 'none';
            }
            if (document.fscouts.usalentes[0].checked == true) {
                document.getElementById('lentitos').style.display = 'block';
            } else {
                document.getElementById('lentitos').style.display = 'none';
            }
            if (document.fscouts.otrenfermedades[0].checked == true) {
                document.getElementById('otrogato').style.display = 'block';
            } else {
                document.getElementById('otrogato').style.display = 'none';
            }
            if (document.fscouts.asma[0].checked == true) {
                document.getElementById('asmita').style.display = 'block';
            } else {
                document.getElementById('asmita').style.display = 'none';
            }
            if (document.fscouts.epilepsia[0].checked == true) {
                document.getElementById('epileps').style.display = 'block';
            } else {
                document.getElementById('epileps').style.display = 'none';
            }
        }
        //part3
        //formulario exclusivo para mujer
        function mostrarForm4Campos() {
            if (document.fscouts.papera[0].checked == true) {
                document.getElementById('paperitas').style.display = 'block';
            } else {
                document.getElementById('paperitas').style.display = 'none';
            }
            if (document.fscouts.paperas[0].checked == true) {
                document.getElementById('paperitas2').style.display = 'block';
            } else {
                document.getElementById('paperitas2').style.display = 'none';
            }
            if (document.fscouts.polio[0].checked == true) {
                document.getElementById('polito').style.display = 'block';
            } else {
                document.getElementById('polito').style.display = 'none';
            }
            if (document.fscouts.polios[0].checked == true) {
                document.getElementById('polito2').style.display = 'block';
            } else {
                document.getElementById('polito2').style.display = 'none';
            }
            if (document.fscouts.varicela[0].checked == true) {
                document.getElementById('varicela1').style.display = 'block';
            } else {
                document.getElementById('varicela1').style.display = 'none';
            }
            if (document.fscouts.varicelas[0].checked == true) {
                document.getElementById('varicela2').style.display = 'block';
            } else {
                document.getElementById('varicela2').style.display = 'none';
            }
            if (document.fscouts.saramp[0].checked == true) {
                document.getElementById('sarampion1').style.display = 'block';
            } else {
                document.getElementById('sarampion1').style.display = 'none';
            }
            if (document.fscouts.sarampion[0].checked == true) {
                document.getElementById('sarampion2').style.display = 'block';
            } else {
                document.getElementById('sarampion2').style.display = 'none';
            }
            if (document.fscouts.bcg[0].checked == true) {
                document.getElementById('bcg1').style.display = 'block';
            } else {
                document.getElementById('bcg1').style.display = 'none';
            }
            if (document.fscouts.bcgs[0].checked == true) {
                document.getElementById('bcg2').style.display = 'block';
            } else {
                document.getElementById('bcg2').style.display = 'none';
            }
            if (document.fscouts.tetano[0].checked == true) {
                document.getElementById('tetano1').style.display = 'block';
            } else {
                document.getElementById('tetano1').style.display = 'none';
            }
            if (document.fscouts.tetanos[0].checked == true) {
                document.getElementById('tetano2').style.display = 'block';
            } else {
                document.getElementById('tetano2').style.display = 'none';
            }
            if (document.fscouts.viruela[0].checked == true) {
                document.getElementById('viruela1').style.display = 'block';
            } else {
                document.getElementById('viruela1').style.display = 'none';
            }
            if (document.fscouts.viruelas[0].checked == true) {
                document.getElementById('viruela2').style.display = 'block';
            } else {
                document.getElementById('viruela2').style.display = 'none';
            }
            if (document.fscouts.difteria[0].checked == true) {
                document.getElementById('difteria1').style.display = 'block';
            } else {
                document.getElementById('difteria1').style.display = 'none';
            }
            if (document.fscouts.difterias[0].checked == true) {
                document.getElementById('difteria2').style.display = 'block';
            } else {
                document.getElementById('difteria2').style.display = 'none';
            }
            if (document.fscouts.rubeola[0].checked == true) {
                document.getElementById('rubeola1').style.display = 'block';
            } else {
                document.getElementById('rubeola1').style.display = 'none';
            }
            if (document.fscouts.rubeolas[0].checked == true) {
                document.getElementById('rubeola2').style.display = 'block';
            } else {
                document.getElementById('rubeola2').style.display = 'none';
            }
            if (document.fscouts.tferina[0].checked == true) {
                document.getElementById('tosferina1').style.display = 'block';
            } else {
                document.getElementById('tosferina1').style.display = 'none';
            }
            if (document.fscouts.tosferina[0].checked == true) {
                document.getElementById('tosferina2').style.display = 'block';
            } else {
                document.getElementById('tosferina2').style.display = 'none';
            }
            if (document.fscouts.meningitis[0].checked == true) {
                document.getElementById('meningitis1').style.display = 'block';
            } else {
                document.getElementById('meningitis1').style.display = 'none';
            }
            if (document.fscouts.meningiti[0].checked == true) {
                document.getElementById('meningitis2').style.display = 'block';
            } else {
                document.getElementById('meningitis2').style.display = 'none';
            }
            if (document.fscouts.influenza[0].checked == true) {
                document.getElementById('influenza1').style.display = 'block';
            } else {
                document.getElementById('influenza1').style.display = 'none';
            }
            if (document.fscouts.influenzas[0].checked == true) {
                document.getElementById('influenza2').style.display = 'block';
            } else {
                document.getElementById('influenza2').style.display = 'none';
            }
            if (document.fscouts.hepatitis[0].checked == true) {
                document.getElementById('hepatitis1').style.display = 'block';
            } else {
                document.getElementById('hepatitis1').style.display = 'none';
            }
            if (document.fscouts.hepatitisabc[0].checked == true) {
                document.getElementById('hepatitis2').style.display = 'block';
            } else {
                document.getElementById('hepatitis2').style.display = 'none';
            }
            if (document.fscouts.otra[0].checked == true) {
                document.getElementById('otra1').style.display = 'block';
            } else {
                document.getElementById('otra1').style.display = 'none';
            }
            if (document.fscouts.otras[0].checked == true) {
                document.getElementById('otra2').style.display = 'block';
            } else {
                document.getElementById('otra2').style.display = 'none';
            }
        }
        //formulario exclusivo para mujer
    </script>
</head>
<body>
    <form id="regiration_form" action="registro.php" method="post" name="fscouts">
        <div class="container col-lg-7 bg-white shadow centrar rounded form-group">
            <h2 class="font-weight-bold">Ficha Medica</h2>
            <p>Bien, a continuacion llenaras los datos que se te pidan de manera correcta</p>
        </div>


        <div class="container col-lg-7 bg-white shadow centrar rounded forcu" id="part1">
            <legend>Datos Personales y de contacto</legend>
            <input type="text" class="form-control mb-2" placeholder="CUM" name="cum" requiered>
            <input type="text" class="form-control mb-2" placeholder="Nombre(s)" name="nombre">
            <input type="text" class="form-control mb-2" placeholder="Apellido Paterno" name="ap_pa">
            <input type="text" class="form-control mb-2" placeholder="Apellido Materno" name="ap_ma">
            <input type="password" class="form-control mb-2" placeholder="Password" name="passuser">
            <input type="text" placeholder="Telefono celular" class="form-control mb-2" name="celular">
            <p>Tipo de usuario</p> <select name="tipouser" class=" form-control mb-2" id="">
                <option value="elegir" selected>Elegir</option>
                <option value="6">Participante</option>
                <option value="7">Scouter Responsable</option>
                <option value="8">Staff</option>
                <option value="4">Tallerista</option>
                <option value="5">Juez</option>
                <option value="2">Organizador</option>
                <option value="3">Servicio Medico</option>
            </select>
            <p>Sexo</p>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="sexoh" name="sexo" onclick="mostrarFormMujer();"
                    checked>
                <label class="custom-control-label" for="sexoh" value="1">Hombre</label>
            </div>
            <div class="custom-control custom-radio mb-2">
                <input type="radio" class="custom-control-input " id="sexom" name="sexo" onclick="mostrarFormMujer();">
                <label class="custom-control-label" for="sexom" value ="0">Mujer</label>
            </div>
            <input type="text" class="form-control mb-2" placeholder="Grupo" name="grupo">
            <input type="text" class="form-control mb-2" placeholder="Provincia" name="provincia">
            <p>Sección</p> <select name="seccion" class=" form-control mb-2" id="">
                <option value="elegir" selected>Elegir</option>
                <option value="manada">Manada</option>
                <option value="tropa">Tropa</option>
                <option value="comunidad">Comunidad</option>
                <option value="clan">Clan</option>
                <option value="scouter">Scouter</option>
            </select>
            <input type="text" placeholder="Scouter Responsable" class="form-control mb-2"name="scouterR">
            <h4 class="font-weight-bold">Fecha de Nacimineto</h4> <input type="date" name="fechadenacimiento" class="form-control mb-2"
                id="">
                <h4 class="font-weight-bold">Fecha de Vigencia Credencial</h4> <input type="date" name="vigenciascout" class="form-control mb-2"
                id="">
            <input type="text" placeholder="Contacto emergencia" class="form-control mb-2" name="contactoemergencia">
            <input type="text" placeholder="Telefono del contacto" class="form-control mb-2"name="telefonoemergencia">
            <input type="text" placeholder="Direccion del contacto" class="form-control mb-2"name="diremergencia">
            <h4 class="font-weight-bold">Nombre del Dr. o Institucion que lo ateiende normalmente</h4> <input type="text"
                placeholder="Nombre" class="form-control mb-2">
            <h4 class="font-weight-bold">Dirección del consultorio u Hospital donde lo ateienden</h4> <textarea name="DireccionInstitucion"
                id="" placeholder="Escribe aqui la direccion" class="form-control shadow-textarea mb-2"></textarea>
            <h4 class="font-weight-bold">¿Cuenta con seguro medico privado?</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="seguromp" name="segurop" onclick="mostrarReferencia();"
                    checked>
                <label class="custom-control-label" for="seguromp">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline mb-2">
                <input type="radio" class="custom-control-input" id="segurompn" name="segurop" onclick="mostrarReferencia();">
                <label class="custom-control-label" for="segurompn">No</label>
            </div>
            <div id="seguritos" style="display:block;">
                <input type="text" placeholder="Aseguradora" class="form-control mb-2">
                <input type="text" placeholder="No. de poliza" class="form-control mb-2">
            </div>
            <h4 class="font-weight-bold">Tipo de seguro </h4>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="segurome" name="seguro" checked>
                <label class="custom-control-label" for="segurome">Gastos medicos mayores</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="seguroma" name="seguro">
                <label class="custom-control-label" for="seguroma">Gastos medicos menores</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="seguroa" name="seguro">
                <label class="custom-control-label" for="seguroa">Ambos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="seguroo" name="seguro">
                <label class="custom-control-label" for="seguroo">Ninguno</label>
            </div>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Primera parte del formulario-->



        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part2">
            <legend>Talla y Señas Particulares</legend>
            <input type="text" class="form-control mb-2" placeholder="Estatura [m]"name="estatura">
            <input type="text" class="form-control mb-2" placeholder="Peso [Kg]"name="peso">
            <h4 class="font-weight-bold">Color de cabello</h4>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="coln" name="color_cabello"  value="1" checked>
                <label class="custom-control-label" for="coln">Negro</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colc" name="color_cabello" value="2">
                <label class="custom-control-label" for="colc">Castaño</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colcr" name="color_cabello" value="3">
                <label class="custom-control-label" for="colcr">Castaño-Rojizo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colr" name="color_cabello" value="4">
                <label class="custom-control-label" for="colr">Rubio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colo" name="color_cabello">
                <label class="custom-control-label" for="colo"><input type="text" class="form-control mb-2" placeholder="otro..."></label>
            </div>
            <h4 class="font-weight-bold">Señas particulares especificas(Cicatrices, tatuajes, etc)</h4>
            <input type="text" class="form-control mb-2" placeholder="Señas">



            <h4 class="font-weight-bold">Color de piel</h4>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colpc" name="color_piel"  value="1"checked>
                <label class="custom-control-label" for="colpc">Claro</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colpmc" name="color_piel" value="2">
                <label class="custom-control-label" for="colpmc">Moreno-Claro</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colpmo" name="color_piel" value="3">
                <label class="custom-control-label" for="colpmo">Moreno-Obscuro</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colpo" name="color_piel" value="4">
                <label class="custom-control-label" for="colpo"><input type="text" class="form-control mb-2"
                        placeholder="otro..."></label>
            </div>
            <h4 class="font-weight-bold">Color de ojos</h4>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colon" name="color_ojos"  value="1"checked>
                <label class="custom-control-label" for="colon">Negro</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="coloc" name="color_ojos" value="2">
                <label class="custom-control-label" for="coloc">Café</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="colom" name="color_ojos" value="3">
                <label class="custom-control-label" for="colom">Miel</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="coloo" name="color_ojos" value="4">
                <label class="custom-control-label" for="coloo"><input type="text" class="form-control mb-2"
                        placeholder="otro..."></label>
            </div>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->

            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente " />
        </div>
        <!--Segunda parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part3">
            <legend>Informacion de Salud e Historial Medico</legend>
            <h4 class="font-weight-bold">Anemia</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="anesi" name="anemia" checked>
                <label class="custom-control-label" for="anesi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="aneno" name="anemia">
                <label class="custom-control-label" for="aneno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="anens" name="anemia">
                <label class="custom-control-label" for="anens">No sé</label>
            </div>
            <h4 class="font-weight-bold">Diabetes</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diasi" name="diabetes" value="1" checked>
                <label class="custom-control-label" for="diasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diano" name="diabetes" value="2">
                <label class="custom-control-label" for="diano">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="dians" name="diabetes" value="3">
                <label class="custom-control-label" for="dians">No sé</label>
            </div>
            <h4 class="font-weight-bold">Hipertension</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="hipsi" name="hipertension" value="1"checked>
                <label class="custom-control-label" for="hipsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="hipno" name="hipertension"value="2">
                <label class="custom-control-label" for="hipno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="hipns" name="hipertension"value="3">
                <label class="custom-control-label" for="hipns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Embolias</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="embsi" name="embolia" checked>
                <label class="custom-control-label" for="embsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="embno" name="embolia">
                <label class="custom-control-label" for="embno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="embns" name="embolia">
                <label class="custom-control-label" for="embns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Fracturas</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="frasi" name="fracturas" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="frasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="frano" name="fracturas" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="frano">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="frans" name="fracturas" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="frans">No sé</label>
            </div>
            <div id="fracturita" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifica</h4>
                <textarea name="fracturas" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">Gastritis</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="gassi" name="gastritis" checked>
                <label class="custom-control-label" for="gassi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="gasno" name="gastritis">
                <label class="custom-control-label" for="gasno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="gasns" name="gastritis">
                <label class="custom-control-label" for="gasns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Desmayos</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="dessi" name="desmayos" checked>
                <label class="custom-control-label" for="dessi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="desno" name="desmayos">
                <label class="custom-control-label" for="desno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="desns" name="desmayos">
                <label class="custom-control-label" for="desns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Hemofilia</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="hemsi" name="hemofilia" checked>
                <label class="custom-control-label" for="hemsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="hemno" name="hemofilia">
                <label class="custom-control-label" for="hemno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="hemns" name="hemofilia">
                <label class="custom-control-label" for="hemns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Migrañas</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="migsi" name="migrañas" checked>
                <label class="custom-control-label" for="migsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="migno" name="migrañas">
                <label class="custom-control-label" for="migno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="migns" name="migrañas">
                <label class="custom-control-label" for="migns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Enfermedades de vías respiratorias (Sinusitis, Bronquitis, Resfriados, etc.)</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enferessi" name="enferespiratorias" checked
                    onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="enferessi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enferesno" name="enferespiratorias" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="enferesno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enferesns" name="enferespiratorias" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="enferesns">No sé</label>
            </div>
            <div id="erespiratorias" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifica</h4>
                <textarea name="enfermedadesRespiratorias" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">Desordenes del sueño</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="dessuesi" name="dessueño" checked>
                <label class="custom-control-label" for="dessuesi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="dessueno" name="dessueño">
                <label class="custom-control-label" for="dessueno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="dessuens" name="dessueño">
                <label class="custom-control-label" for="dessuens">No sé</label>
            </div>
            <h4 class="font-weight-bold">Enfermedades hemorragicas</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfehemsi" name="enfehemorragicas" checked>
                <label class="custom-control-label" for="enfehemsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfehemno" name="enfehemorragicas">
                <label class="custom-control-label" for="enfehemno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfehemns" name="enfehemorragicas">
                <label class="custom-control-label" for="enfehemns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Problemas circulatorios (i.e presion alta o baja, colesterol elevado, etc.)</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="procirsi" name="procirculatorios" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="procirsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="procirno" name="procirculatorios" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="procirno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="procirns" name="procirculatorios" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="procirns">No sé</label>
            </div>
            <div id="pcirculatorios" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifica</h4>
                <textarea name="ProblemasCirculatorios" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">¿Tienes pie plano?</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="piesi" name="pieplano" checked>
                <label class="custom-control-label" for="piesi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="pieno" name="pieplano">
                <label class="custom-control-label" for="pieno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="piens" name="pieplano">
                <label class="custom-control-label" for="piens">No sé</label>
            </div>
            <h4 class="font-weight-bold">¿Usa zapatos ortopedicos?</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="zapsi" name="zaportopedicos" checked>
                <label class="custom-control-label" for="zapsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="zapno" name="zaportopedicos">
                <label class="custom-control-label" for="zapno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="zapns" name="zaportopedicos">
                <label class="custom-control-label" for="zapns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Autismo</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="autsi" name="autismo" checked>
                <label class="custom-control-label" for="autsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="autno" name="autismo">
                <label class="custom-control-label" for="autno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="autns" name="autismo">
                <label class="custom-control-label" for="autns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Enfermedades Pulmonares</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfpulsi" name="enfepulmonares" checked>
                <label class="custom-control-label" for="enfpulsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfpulno" name="enfepulmonares">
                <label class="custom-control-label" for="enfpulno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfpulns" name="enfepulmonares">
                <label class="custom-control-label" for="enfpulns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Alergia a la penicilina</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="alepensi" name="alepenicilina" checked>
                <label class="custom-control-label" for="alepensi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="alepenno" name="alepenicilina">
                <label class="custom-control-label" for="alepenno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="alepenns" name="alepenicilina">
                <label class="custom-control-label" for="alepenns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Enfermedades óseas o musculares</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfeomsi" name="enfeoseasomusculares" checked>
                <label class="custom-control-label" for="enfeomsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfeomno" name="enfeoseasomusculares">
                <label class="custom-control-label" for="enfeomno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfeomns" name="enfeoseasomusculares">
                <label class="custom-control-label" for="enfeomns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Alergias conocidas a medicamentos, alimentos, animales o insectos</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="alerconsi" name="alerconocidas" onclick="mostrarForm3Campos();">
                checked>
                <label class="custom-control-label" for="alerconsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="alerconno" name="alerconocidas" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="alerconno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="alerconns" name="alerconocidas" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="alerconns">No sé</label>
            </div>
            <div id="alergias" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifica</h4>
                <textarea name="Alergias" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">Enfermedades de la tiroides</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enftirsi" name="enfetiroides" checked>
                <label class="custom-control-label" for="enftirsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enftirno" name="enfetiroides">
                <label class="custom-control-label" for="enftirno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enftirns" name="enfetiroides">
                <label class="custom-control-label" for="enftirns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Dificultad excesiva para respirar al ejercitarse</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="difrespsi" name="difrespirar" checked>
                <label class="custom-control-label" for="difrespsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="difrespno" name="difrespirar">
                <label class="custom-control-label" for="difrespno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="difrespns" name="difrespirar">
                <label class="custom-control-label" for="difrespns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Enfermedades inmunes</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfeinmsi" name="enfeinmunes" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="enfeinmsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfeinmno" name="enfeinmunes" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="enfeinmno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="enfeinmns" name="enfeinmunes" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="enfeinmns">No sé</label>
            </div>
            <div id="enfermedadinmune" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifica</h4>
                <textarea name="enfermedadinmune" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">Problemas de columna</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="procolusi" name="problcolumna" checked>
                <label class="custom-control-label" for="procolusi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="procoluno" name="problcolumna">
                <label class="custom-control-label" for="procoluno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="procoluns" name="problcolumna">
                <label class="custom-control-label" for="procoluns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Problemas auditivos</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="proaudsi" name="problauditivos" checked>
                <label class="custom-control-label" for="proaudsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="proaudno" name="problauditivos">
                <label class="custom-control-label" for="proaudno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="proaudns" name="problauditivos">
                <label class="custom-control-label" for="proaudns">No sé</label>
            </div>
            <h4 class="font-weight-bold">¿Usa aparatos auditivos??</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="usaapsi" name="usaapauditivos" checked>
                <label class="custom-control-label" for="usaapsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="usaapno" name="usaapauditivos">
                <label class="custom-control-label" for="usaapno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="usaapns" name="usaapauditivos">
                <label class="custom-control-label" for="usaapns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Problemas visuales</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="provissi" name="problvisuales" checked>
                <label class="custom-control-label" for="provissi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="provisno" name="problvisuales">
                <label class="custom-control-label" for="provisno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="provisns" name="problvisuales">
                <label class="custom-control-label" for="provisns">No sé</label>
            </div>
            <h4 class="font-weight-bold">¿Usa lentes?</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="usalensi" name="usalentes" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="usalensi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="usalenno" name="usalentes" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="usalenno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="usalenns" name="usalentes" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="usalenns">No sé</label>
            </div>
            <div id="lentitos" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifique la graducaion de ojo izquierdo y
                    derecho
                    respectivamente</p>
                    <textarea name="lentes" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">Alteraciones psicologicas o emocionales</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="altpsisi" name="altpsicologicas" checked>
                <label class="custom-control-label" for="altpsisi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="altpsino" name="altpsicologicas">
                <label class="custom-control-label" for="altpsino">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="altpsins" name="altpsicologicas">
                <label class="custom-control-label" for="altpsins">No sé</label>
            </div>
            <h4 class="font-weight-bold">Trastornos de conducta o neurologicos</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="trasconsi" name="trasconducta" checked>
                <label class="custom-control-label" for="trasconsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="trasconno" name="trasconducta">
                <label class="custom-control-label" for="trasconno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="trasconns" name="trasconducta">
                <label class="custom-control-label" for="trasconns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Otras enfermedades</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrenfsi" name="otrenfermedades" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="otrenfsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrenfno" name="otrenfermedades" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="otrenfno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrenfns" name="otrenfermedades" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="otrenfns">No sé</label>
            </div>
            <div id="otrogato" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", especifique.</h4>
                <textarea name="otrogato" id="" class="form-control shadow-textarea mb-2" placeholder="Especifica..."></textarea>
            </div>
            <h4 class="font-weight-bold">Asma</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="asmasi" name="asma" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="asmasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="asmano" name="asma" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="asmano">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="asmans" name="asma" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="asmans">No sé</label>
            </div>
            <div id="asmita" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", selecciona la fecha del ultimo suceso.</h4>
                <input type="date" name="" id="" class="form-control">
            </div>
            <h4 class="font-weight-bold">Epilepsia</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="epilsi" name="epilepsia" onclick="mostrarForm3Campos();"
                    checked>
                <label class="custom-control-label" for="epilsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="epilno" name="epilepsia" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="epilno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="epilns" name="epilepsia" onclick="mostrarForm3Campos();">
                <label class="custom-control-label" for="epilns">No sé</label>
            </div>
            <div id="epileps" style="display:block;">
                <h4 class="font-weight-bold">En caso de marcar "Sí", selecciona la fecha del ultimo suceso.</h4>
                <input type="date" name="" id="" class="form-control">
            </div>
            <h4 class="font-weight-bold">Grupo Sanguineo</h4>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="grua" name="gruposanguineo"  value="1" checked>
                <label class="custom-control-label" for="grua">A</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="grub" name="gruposanguineo" value="2" >
                <label class="custom-control-label" for="grub">B</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="gruab" name="gruposanguineo" value="3" >
                <label class="custom-control-label" for="gruab">AB</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="gruo" name="gruposanguineo" value="4" >
                <label class="custom-control-label" for="gruo">O</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="gruns" name="gruposanguineo" value="5" >
                <label class="custom-control-label" for="gruns">No sé</label>
            </div>
            <h4 class="font-weight-bold">Tipo</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tipop" name="tiposangre" value="1" checked>
                <label class="custom-control-label" for="tipop">Positivo</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tipon" name="tiposangre" value="2">
                <label class="custom-control-label" for="tipon">Negativo</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tipons" name="tiposangre" value="3">
                <label class="custom-control-label" for="tipons">No sé</label>
            </div>
            <h4 class="font-weight-bold">¿Estas dispuesto a donar sangre?</h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="donars" name="donarsangre" value="1" checked>
                <label class="custom-control-label" for="donars">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="donarn" name="donarsangre" value="2">
                <label class="custom-control-label" for="donarn">No</label>
            </div>
            <br>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->

            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Tercera parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part4">
            <legend>Vacunas Recibidas</legend>
            <p>Paperas</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="papesi" name="papera" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="papesi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="papeno" name="papera" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="papeno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="papens" name="papera" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="papens">No sé</label>
            </div>
            <div id="paperitas" style="display:block;">
                <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
                <input type="date" name="fecha de vacunacionpaperas" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="paperasi" name="paperas" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="paperasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="paperano" name="paperas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="paperano">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="paperans" name="paperas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="paperans">No sé</label>
            </div>
            <div id="paperitas2" style="display:block;">
                <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
                <input type="date" name="fecha de padecimientopaperas" class="form-control mb-2" id="">
            </div>
            <p>Polio</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="polsi" name="polio" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="polsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="polno" name="polio" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="polno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="polns" name="polio" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="polns">No sé</label>
            </div>
            <div id="polito">
                <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
                <input type="date" name="fecha de vacunacionpolio" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="poliosi" name="polios" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="poliosi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="poliono" name="polios" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="poliono">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="polions" name="polios" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="polions">No sé</label>
            </div>
            <div id="polito2">
                <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
                <input type="date" name="fecha de padecimientopolio" class="form-control mb-2" id="">
            </div>
            <p>Varicela</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="varisi" name="varicela" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="varisi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="varino" name="varicela" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="varino">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="varins" name="varicela" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="varins">No sé</label>
            </div>
            <div id="varicela1">
                <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
                <input type="date" name="fecha de vacunacionvaricela" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="varicsi" name="varicelas" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="varicsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="varicno" name="varicelas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="varicno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="varicns" name="varicelas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="varicns">No sé</label>
            </div>
            <div id="varicela2">
                <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
                <input type="date" name="fecha de padecimientovaricela" class="form-control mb-2" id="">
            </div>
            <p>Sarampion</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="saramsi" name="saramp" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="saramsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="saramnol" name="saramp" onclick="mostrarForm4Campos();">
                    <label class="custom-control-label" for=saramnol">No</label>
                </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="saramns" name="saramp" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="saramns">No sé</label>
            </div>
            <div id="sarampion1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionsarampion" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="sarasi" name="sarampion" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="sarasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="saranos" name="sarampion" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="saranos">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="sarans" name="sarampion" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="sarans">No sé</label>
            </div>
            <div id="sarampion2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientosarampion" class="form-control mb-2" id="">
            </div>
            <p>BCG</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="bcsi" name="bcg" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="bcsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="bcno" name="bcg" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="bcno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="bcns" name="bcg" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="bcns">No sé</label>
            </div>
            <div id="bcg1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionbcg" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="bcgsi" name="bcgs" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="bcgsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="bcgno" name="bcgs" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="bcgno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="bcgns" name="bcgs" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="bcgns">No sé</label>
            </div>
            <div id="bcg2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientobcg" class="form-control mb-2" id="">
            </div>
            <p>Tetanos</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tetsi" name="tetano" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="tetsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tetno" name="tetano" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tetno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tetns" name="tetano" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tetns">No sé</label>
            </div>
            <div id="tetano1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunaciontetano" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tetanosi" name="tetanos" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="tetanosi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tetanono" name="tetanos" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tetanono">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tetanons" name="tetanos" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tetanons">No sé</label>
            </div>
            <div id="tetano2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientotetanos" class="form-control mb-2" id="">
            </div>
            <p>Viruela</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="virsi" name="viruela" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="virsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="virno" name="viruela" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="virno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="virns" name="viruela" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="virns">No sé</label>
            </div>
            <div id="viruela1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionviruela" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="virusi" name="viruelas" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="virusi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="viruno" name="viruelas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="viruno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="viruns" name="viruelas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="viruns">No sé</label>
            </div>
            <div id="viruela2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientoviruela" class="form-control mb-2" id="">
            </div>
            <p>Difteria</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diftsi" name="difteria" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="diftsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diftno" name="difteria" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="diftno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diftns" name="difteria" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="diftns">No sé</label>
            </div>
            <div id="difteria1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunaciondifteria" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diftesi" name="difterias" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="diftesi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="difteno" name="difterias" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="difteno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="diftens" name="difterias" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="diftens">No sé</label>
            </div>
            <div id="difteria2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientodifterias" class="form-control mb-2" id="">
            </div>
            <p>Rubeola</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="rubesi" name="rubeola" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="rubesi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="rubeno" name="rubeola" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="rubeno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="rubens" name="rubeola" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="rubens">No sé</label>
            </div>
            <div id="rubeola1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionrubeola" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="rubeosi" name="rubeolas" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="rubeosi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="rubeono" name="rubeolas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="rubeono">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="rubeons" name="rubeolas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="rubeons">No sé</label>
            </div>
            <div id="rubeola2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientorubeola" class="form-control mb-2" id="">
            </div>
            <p>Tos ferina</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tferisi" name="tferina" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="tferisi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tferino" name="tferina" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tferino">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tferins" name="tferina" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tferins">No sé</label>
            </div>
            <div id="tosferina1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunaciontferina" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tfersi" name="tosferina" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="tfersi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tferno" name="tosferina" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tferno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tferns" name="tosferina" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="tferns">No sé</label>
            </div>
            <div id="tosferina2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientotosferina" class="form-control mb-2" id="">
            </div>
            <p>Meningitis</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="menisi" name="meningitis" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="menisi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="menino" name="meningitis" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="menino">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="menins" name="meningitis" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="menins">No sé</label>
            </div>
            <div id="meningitis1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionmeningitis" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="meninsi" name="meningiti" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="meninsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="meninno" name="meningiti" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="meninno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="meninns" name="meningiti" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="meninns">No sé</label>
            </div>
            <div id="meningitis2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientomeningitis" class="form-control mb-2" id="">
            </div>
            <p>Influenza</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="infsi" name="influenza" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="infsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="infno" name="influenza" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="infno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="infns" name="influenza" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="infns">No sé</label>
            </div>
            <div id="influenza1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacioninfluenza" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="inflsi" name="influenzas" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="inflsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="inflno" name="influenzas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="inflno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="inflns" name="influenzas" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="inflns">No sé</label>
            </div>
            <div id="influenza2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientoinfluenza" class="form-control mb-2" id="">
            </div>
            <p>Hepatitis A, B o C</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="habcsi" name="hepatitis" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="habcsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="habcno" name="hepatitis" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="habcno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="habcns" name="hepatitis" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="habcns">No sé</label>
            </div>
            <div id="hepatitis1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionhepatitis" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="heabcsi" name="hepatitisabc" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="heabcsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="heabcno" name="hepatitisabc" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="heabcno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="heabcns" name="hepatitisabc" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="heabcns">No sé</label>
            </div>
            <div id="hepatitis2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientohepatitis" class="form-control mb-2" id="">
            </div>
            <p>Otra (Especifique)</p>
            <input type="text" class="form-control mb-2" placeholder="Especifica...">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrsi" name="otra" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="otrsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrno" name="otra" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="otrno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrns" name="otra" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="otrns">No sé</label>
            </div>
            <div id="otra1">
            <p>En caso de marcar "Sí", Especifica la fecha de vacunacion.</p>
            <input type="date" name="fecha de vacunacionotra" class="form-control mb-2" id="">
            </div>
            <p>¿Has padecido la enfermedad?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrasi" name="otras" onclick="mostrarForm4Campos();"
                    checked>
                <label class="custom-control-label" for="otrasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrano" name="otras" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="otrano">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="otrans" name="otras" onclick="mostrarForm4Campos();">
                <label class="custom-control-label" for="otrans">No sé</label>
            </div>
            <div id="otra2">
            <p>En caso de marcar "Sí", Especifica la fecha del padecimiento.</p>
            <input type="date" name="fecha de padecimientootras" class="form-control mb-2" id="">
            </div>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->
                <br>
                <br>
            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Cuarta parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part5">
            <legend>Informacion sobre cuidados especiales</legend>
            <p>¿Lleva algún régimen de dieta especial?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="regdietsi" name="dieta"value="1" checked>
                <label class="custom-control-label" for="regdietsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="regdietno" name="dieta"value="2">
                <label class="custom-control-label" for="regdietno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="regdietns" name="dieta"value="3">
                <label class="custom-control-label" for="regdietns">No sé</label>
            </div>
            <p>En caso de marcar "Sí", Especifique</p>
            <input type="text" class="form-control" placeholder="Especifica...">
            <p>¿Tienes afecciones que puedan ser agravadas por el frio o calor excesivo?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="reafsi" name="afecciones" value="1" checked>
                <label class="custom-control-label" for="reafsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="reafno" name="afecciones" value="2">
                <label class="custom-control-label" for="reafno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="reafns" name="afecciones" value="3">
                <label class="custom-control-label" for="reafns">No sé</label>
            </div>
            <p>En caso de marcar "Sí", Especifique</p>
            <input type="text" class="form-control" placeholder="Especifica...">
            <p>¿Usa recreativamente sustancias psicotropicas o alucinogenas?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="recpsisi" name="sustanciasrecreativas" value="1"checked>
                <label class="custom-control-label" for="recpsisi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="recpsino" name="sustanciasrecreativas" value="2">
                <label class="custom-control-label" for="recpsino">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="recpsins" name="sustanciasrecreativas" value="3">
                <label class="custom-control-label" for="recpsins">No sé</label>
            </div>
            <p>¿Fuma?</p>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="fumah" name="fuma"  value="1" checked>
                <label class="custom-control-label" for="fumah">Habitualmente</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="fumas" name="fuma" value="2">
                <label class="custom-control-label" for="fumas">Socialmente</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="fumar" name="fuma" value="3">
                <label class="custom-control-label" for="fumar">Rara vez</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="fuman" name="fuma" value="4">
                <label class="custom-control-label" for="fuman">No</label>
            </div>
            <p>¿Bebe alcohol?</p>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="bebeh" name="bebealcohol" value="1"checked>
                <label class="custom-control-label" for="bebeh">Habitualmente</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="bebes" name="bebealcohol" value="2">
                <label class="custom-control-label" for="bebes">Socialmente</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="beber" name="bebealcohol" value="3">
                <label class="custom-control-label" for="beber">Rara vez</label>
            </div>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="beben" name="bebealcohol" value="4">
                <label class="custom-control-label" for="beben">No</label>
            </div>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->

            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Quinta parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part6">
            <legend>Informacion adicional que considere importante compartir</legend>
            <p>En el siguiente cuadro especifica a detalle la infomacion que quieras compartir</p>
            <textarea name="infoadicional" id="" class="form-control shadow-textarea mb-2" placeholder="Escriba..."></textarea>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->

            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Sexta parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part7">
            <legend>Antecedentes familiares (Padres, Abuelos, Hermanos, Tíos, Primos).</legend>
            <p>¿Alguien en su familia tiene o ha tenido diabetes?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famdiasi" name="familiadiabetes" value="1" checked>
                <label class="custom-control-label" for="famdiasi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famdiano" name="familiadiabetes" value="2">
                <label class="custom-control-label" for="famdiano">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famdians" name="familiadiabetes" value="3">
                <label class="custom-control-label" for="famdians">No sé</label>
            </div>
            <p>¿Su familia tiene historial de hipertension?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famhipsi" name="familiahipertension" value="1" checked>
                <label class="custom-control-label" for="famhipsi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famhipno" name="familiahipertension" value="2">
                <label class="custom-control-label" for="famhipno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famhipns" name="familiahipertension" value="3">
                <label class="custom-control-label" for="famhipns">No sé</label>
            </div>
            <p>¿Alguien en su familia tiene o ha tenido alguna enfermedad o sindrome de tipo hereditario?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famhersi" name="enferhereditaria" checked>
                <label class="custom-control-label" for="famhersi">Sí</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famherno" name="enferhereditaria">
                <label class="custom-control-label" for="famherno">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="famherns" name="enferhereditaria">
                <label class="custom-control-label" for="famherns">No sé</label>
            </div>
            <p>En caso de marcar "Sí", Especifica.</p>
            <input type="text" class="form-control mb-2" placeholder="Enfermedad/Sindrome">
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->

            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Septima parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part8">
            <legend>Exclusivo para mujeres</legend>
            <div id="mujercita" style="display:none;">
                <p class="font-weight-bold">¿Es posible que este embarazada?</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="posembsi" name="embarazo" checked>
                    <label class="custom-control-label" for="posembsi">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="posembno" name="embarazo">
                    <label class="custom-control-label" for="posembno">No</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="posembns" name="embarazo">
                    <label class="custom-control-label" for="posembns">No sé</label>
                </div>
                <p class="font-weight-bold">¿Toma algún tipo de anticonceptivo?</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="anticsi" name="anticonceptivo" checked>
                    <label class="custom-control-label" for="anticsi">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="anticno" name="anticonceptivo">
                    <label class="custom-control-label" for="anticno">No</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="anticns" name="anticonceptivo">
                    <label class="custom-control-label" for="anticns">No sé</label>
                </div>
                <p class="font-weight-bold">En caso de marcar "Sí", Especifica.</p>
                <input type="text" class="form-control mb-2" placeholder="Especifica...">
                <p class="font-weight-bold">¿Problemas menstruales?</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="probmensi" name="probmenstruales" checked>
                    <label class="custom-control-label" for="probmensi">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="probmenno" name="probmenstruales">
                    <label class="custom-control-label" for="probmenno">No</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="probmenns" name="probmenstruales">
                    <label class="custom-control-label" for="probmenns">No sé</label>
                </div>
                <br>
                <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </div>
        <!--Octava parte del formulario-->


        <div class="container col-lg-7 bg-white shadow centrar hide rounded forcu" id="part9">
            <legend class="font-weight-bold"> Medicamentos preescritos</legend>
            <h6 class="font-weight-bold">Solo en caso de tenerlos</h6>
            <p>Medicamentos (Especificar la dosis y la frecuencia con la que se toma.)</p>
            <textarea name="medicametosp" id="" class="form-control shadow-textarea mb-2" placeholder="Escriba..."></textarea>
            <!--<input type="button" value="Atras" class="btn btn-purple round">
        <input type="button" value="Siguiente" class="btn btn-purple round">
        -->

            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente"
                " />
</div><!--Novena parte del formulario-->

    
    <div  class=" container col-lg-7 bg-white
                shadow centrar hide rounded forcu" id="part10">
            <legend class="font-weight-bold">Terminos y condiciones</legend>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequatur rem nesciunt ducimus
                maxime incidunt nostrum, tenetur voluptate fuga et reprehenderit ipsum minus beatae. Praesentium quasi
                officia animi eum pariatur.</p>
            <h5>Acepto los términos y condiciones plasmados en este formulario</h5>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="terminos" name="terminosycondiciones" checked
                    required>
                <label class="custom-control-label" for="terminos">Acepto</label>
            </div>
            <!--<input type="button" value="Enviar" class="btn btn-default">-->
            <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
            <input type="submit" name="submit" class="submit btn btn-success" value="insertar" />
        </div>
        <!--Decima  parte del formulario-->

        <div class="progress container col-lg-7  rounded formBar">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </form>


    <script>
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
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
</body>

</html>