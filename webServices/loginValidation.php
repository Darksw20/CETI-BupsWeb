<?php 
	$db_hostname="localhost";
	$db_database="prueba";
	$db_username="root";
	$db_password="";
	error_reporting(0);
	$json=array();
	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST['CUM'];
		$Password=$_POST['Pass'];
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
?>