<?php 
	include ("conexion.php");
	error_reporting(0);
	$json=array();

	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST["CUM"];
		$password=$_POST["Pass"];
		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
		$query="SELECT * FROM usuario WHERE CUM='".$CUM."' AND Password='".$password."'";
		mysqli_set_charset($conexion,"utf8");

		if(mysqli_connect_errno())
		{
			//Revisa el tipo de error y lo muestra
			$json['tipoUser']=mysqli_connect_errno();
			mysqli_close($conexion);
			echo json_encode($json);
		}
		else
		{
			$res_query=mysqli_query($conexion,$query);
			if($registro=mysqli_fetch_array($res_query))
			{
				//Guarda los datos del usuario y los envia
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
				//El usuario no existe
				$json['tipoUser']=0;
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}

		
	}
	else
	{
		$json['tipoUser']=404;
		mysqli_close($conexion);
		echo json_encode($json);
	}
