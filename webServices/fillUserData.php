<?php 
	$db_hostname="scoutbups.com";
	$db_database="u606225741_bupsd";
	$db_username="u606225741_admin";
	$db_password="BenjaSeLaCome123!";

	$json=array();


	if(null!==$_POST["CUM"]&&null!==$_POST["pass"])
	{
		
		$CUM=$_POST["CUM"];
		$password=$_POST["pass"];

		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
		$query="SELECT * FROM usuario WHERE CUM='".$CUM."' AND Password='".$password."'";
		mysqli_set_charset($conexion,"utf8");
		$res_query=mysqli_query($conexion,$query);

		if($registro=mysqli_fetch_array($res_query))
		{
			$json['CUM']=(string)$registro['CUM'];
			$json['nombre']=(string)$registro['Nombre'];
			$json['aPat']=(string)$registro['A_Pat'];
			$json['aMat']=(string)$registro['A_Mat'];
			$json['fNaci']=(string)$registro['F_Naci'];
			$json['vigencia']=(string)$registro['Vigencia'];
			$json['provincia']=(string)$registro['Provincia'];
			$json['grupoS']=(int)$registro['Grupo_S'];
			$json['seccion']=(string)$registro['Seccion'];
			$json['scouterResp']=(string)$registro['Scouter_Responsable'];
			$json['telCel']=(string)$registro['Tel_Cel'];
			$json['pass']=(string)$registro['Password'];
			$json['colorCabello']=(string)$registro['Color_Cabello'];
			$json['colorOjos']=(string)$registro['Color_Ojos'];
			$json['colorPiel']=(string)$registro['Color_Piel'];
			$json['tipoSangre']=(string)$registro['Tipo_Sangre'];
			$json['dieta']=(string)$registro['Dieta'];
			$json['regnal']=(string)$registro['FK_Regnal'];
			$json['sexo']=(int)$registro['Sexo'];
			$json['donarSangre']=(int)$registro['Donar_Sangre'];
			$json['alcohol']=(int)$registro['Alcohol'];
			$json['fumador']=(int)$registro['Fumador'];
			$json['usoSustancias']=(int)$registro['Uso_Sustancias'];
			$json['famDiabetes']=(int)$registro['Fam_Diabetes'];
			$json['famHipertension']=(int)$registro['Fam_Hipertension'];
			$json['afeccionesFrioCalor']=(int)$registro['Afecciones_Frio_Calor'];
			$json['infoEmergencia']=(int)$registro['FK_Info_Emergencia'];
			$json['tipoUser']=(int)$registro['Tipo_Usuario'];
			$json['estatura']=(double)$registro['Estatura'];
			$json['peso']=(double)$registro['Peso'];	
		}
		else
		{
			$json['tipoUser']=500;
		}
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else
	{
		$json['tipoUser']=404;
		echo json_encode($json);
	}
