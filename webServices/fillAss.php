<?php 
	include ("conexion.php");
	error_reporting(0);
	$json=array();

	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST["CUM"];
		$password=$_POST["Pass"];
		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
		$query="SELECT CUM,Nombre FROM usuario";
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
			
			$i=0;
			while($registro=mysqli_fetch_array($res_query))
			{

				//Guarda los datos del usuario y los envia

				$json['CUM'][$i]=(string)$registro['CUM'];
				$json['nombre'][$i]=(string)$registro['Nombre'];
				$i++;	
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

 ?>