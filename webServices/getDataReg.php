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
					$json['regTalleresConc']=regTC();//Regresa suma de tallers y concursos
					$json['regPagados']=pagados();
					$json['regPreReg']=regPreReg();
					$json['masTaller']=masTC();
					$json['asistProv']=asistProv();
					$json['tallerxPer']=tallerxPer();
					$json['kitExist']=kitExist();
					$json['kitEntre']=kitEntre();
					

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

function regTC()
{

	$sumTalleresConcursos=420;
	return $sumTalleresConcursos;
}

function pagados()
{
	$pag=3000;
	return $pag;
}
function regPreReg()
{
	$reg=1500;
	return $reg;
}
function masTC()
{
	$mastc=300;
	return $mastc;
}
function asistProv()
{
	$prov=array();
	$prov[0]=2400;
	$prov[1]=50;
	$prov[2]=400;
	$prov[3]=50;
	$prov[4]=400;
	$prov[5]=50;
	$prov[6]=400;
	$prov[7]=50;
	$prov[8]=400;
	$prov[9]=50;
	
	return $prov;
}
function tallerxPer()
{
	$users=8700;
	$talleres=5600;
	$concursos=2300;
	$TallxPer=($users/($talleres+$concursos));
	return $TallxPer;
}
function kitExist()
{
	$kitsE=8500;
	return $kitsE;
}
function kitEntre()
{
	$kitsEnt=200;
	return $kitsEnt;
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