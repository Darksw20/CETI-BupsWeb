<?php
	/* Conexion con base de datos. */
	$conexion = new PDO('mysql:host=localhost;dbname=eeas1sindatos;charset=UTF8', 'root', '');
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$matriz = array(); // En esta matriz almacenaremos los resultados.

	/* Se define la consulta SQL */
	$consulta = "INSERT INTO usuario (";
	$consulta .= "CUM, Nombre, A_Pat, A_Mat, Sexo, F_Naci, Vigencia, Provincia, Grupo_S, Seccion, Scouter_Responsable, Tel_Cel, Password, Estatura, Peso, Color_Cabello, Color_Ojos, Color_Piel, Tipo_Sangre, Donar_Sangre, Dieta, Alcohol, Fumador, Uso_Sustancias, Fam_Diabetes, Fam_Hipertension, Afecciones_Frio_Calor, Fk_Info_Emergencia, Fk_Regnal, Tipo_Usuario";
	$consulta .= ") VALUES (";
	$consulta .= "'Jalo121516', 'Benjamin', 'Vazquez', 'Cruz', '1','2018-10-02','2018-10-02','sas','12','as','calaca','3323550062','12345','15','90','rojito','verde','negro','b','1','dee','0','0','0','0','0','0','2','jalo121516','2')";

	/* Se efectúa la consulta. */
	$conexion->query($consulta);
