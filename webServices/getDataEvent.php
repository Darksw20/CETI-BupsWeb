<?php
	include ("conexion.php");
	$json=array();

	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST["CUM"];
		$password=$_POST["Pass"];
		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
		$query="SELECT Tipo_Usuario FROM usuario WHERE CUM='".$CUM."' AND Password='".$password."'";
		mysqli_set_charset($conexion,"utf8");
		if(mysqli_connect_errno())
		{
			//Revisa el tipo de error y lo muestra
			$json['estadoQuery']=mysqli_connect_errno();
			mysqli_close($conexion);
			echo json_encode($json);
		}
		else
		{
			$res_query=mysqli_query($conexion,$query);
			if($registro=mysqli_fetch_array($res_query))
			{

				$userValid=$registro['Tipo_Usuario'];
				if($userValid==1)
				{
					$json['estadoQuery']=200;
					$json['dentro']=dentro();
					$json['fuera']=fuera();
					$json['entradasT']=entT();
					$json['salidasT']=salT();
					$json['horasT']=horasT();

				}
				else
				{
					$json['estadoQuery']=0;
					
				}
			}
			else
			{
				$json['estadoQuery']=0;
				
			}

			mysqli_close($conexion);
			echo json_encode($json);
		}
		


	}
	else
	{
		$json['estadoQuery']=404;
		mysqli_close($conexion);
		echo json_encode($json);
	}

function dentro()
{

	$dentro=5000;
	return $dentro;
}

function fuera()
{
	$fuera=3000;
	return $fuera;
}
function entT()
{
	$entTo=2500;
	return $entTo;
}
function salT()()
{
	$salTo=2700;
	return $salTo;
}
function horasT()
{
	$prov=array();
	$prov['hora']=50;
	$prov['minutos']=30;
	$prov['segundos']=57;
	return $horasTo;
}
/*
	$AGS
	$GT1
	$GT2
	$QUE
	$SLP
	$ZAC
	$ALO
	$AZC
	$BEJ
	$CHA
	$COY
	$CUA
	$GAM
	$IZO
	$IZA
	$MIH
	$TXO
	$TLA
	$VEC
	$COH
	$CON
	$LAL
	$NUL
	$TAS
	$TAN
	$BCN
	$BCS
	$SIN
	$SON
	$CHN
	$CHS
	$DUR
	$VAN
	$CUT
	$NAU
	$TNP
	$COL
	$JAL
	$MIC
	$MAY
	$PUV
	$HID
	$OAX
	$PUE
	$TXC
	$VER
	$CAM
	$CHI
	$QUR
	$TAB
	$YUC
	$GUE
	$MOR
	$TOL
*/