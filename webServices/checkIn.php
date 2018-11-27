<?php 
	include ("conexion.php");

	error_reporting(0);
	$json=array();
	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST['CUM'];
		$Password=$_POST['Pass'];
		$equipo=array();
		$i=0;
		$equipos="equipo".$i;
		
		while($i<9)
		{
			$equipo[$i]=$_POST[$equipos];
			$i++;
			$equipos="equipo".$i;
		}

		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
		$query="SELECT Tipo_Usuario FROM usuario WHERE CUM='".$CUM."'AND Password='".$Password."'";
		mysqli_set_charset($conexion,"utf8");
		
		if(mysqli_connect_errno())
		{
			//Revisa el tipo de error y lo muestra
			$json['tipo']=mysqli_connect_errno();
			mysqli_close($conexion);
			echo json_encode($json);
		}
		else
		{
			$res_query=mysqli_query($conexion,$query);
			if($registro=mysqli_fetch_array($res_query))
			{
				//Guarda tipo de usuario si todo es correcto
				$json['tipo']=$registro['Tipo_Usuario'];
				$a=0;
				while($a<8)
				{
					if($equipo[$a]!=NULL)
					{
						$fecha=date("h:i:sa");
						$sqlInsert="INSERT INTO relacion_acceso VALUES('','$fecha', 1,'".$equipo[$a]."',1)";
						$res_query=mysqli_query($conexion,$sqlInsert).mysqli_error($conexion);
					}
					
					$a++;
				}

			}
			else
			{
				//El usuario no existe
				$json['tipo']=0;
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}
	}
	else
	{
		//Falta alguno de los parametros
		$json['tipo']=404;
		mysqli_close($conexion);
		echo json_encode($json);
	}