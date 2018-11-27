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
					$json['numIncidencias']=incidencias();//Regresa suma de tallers y concursos
					$json['personasSin']=sinLlegar();
					$json['personasLle']=pLlegados();

					$json['escalaSat']=Satisfaccion();

					$json['gastoProy']=gProy();
					$json['gastoFinal']=gFinal();

					$json['evalTalleres']=evalTall();

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

function incidencias()
{

	$inc=200;
	return $inc;
}

function sinLlegar()
{
	$sL=3000;
	return $sL;
}
function pLlegados()
{
	$pL=1500;
	return $pL;
}
function Satisfaccion()
{
	$sat=array();
	$sat[0]=2400;
	$sat[1]=50;
	$sat[2]=400;
	$sat[3]=50;
	$sat[4]=400;
	return $sat;
}
function gProy()
{
	
	$gastP=300;
	return $gastP;
}
function gFinal()
{
	$gastF=14440;
	return $gastF;
}
function evalTall()
{
	$eval=array();
	$eval[0]=2400;
	$eval[1]=50;
	$eval[2]=400;
	$eval[3]=50;
	$eval[4]=400;
	$eval[5]=2400;
	$eval[6]=50;
	$eval[7]=400;
	$eval[8]=50;
	$eval[9]=400;
	return $eval;
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