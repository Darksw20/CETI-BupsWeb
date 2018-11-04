<?php 
	
	$db_hostname="localhost";
	$db_database="bups";
	$db_username="root";
	$db_password="";

	$json=array();

	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST['CUM'];
		$password=$_POST['Pass'];

		
		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

		/*
			Aqui se hace un script para revisar que existan los componentes necesarios
			para poder entrar de manera correcta al sistema
		*/
		$query="SELECT Tipo_Usuario FROM usuario WHERE CUM='".$CUM."'AND Password='".$password."'";
		$res_query=mysqli_query($conexion,$query);

		if($registro=mysqli_fetch_array($res_query))
		{
			$json['tipo']=$registro['Tipo_Usuario'];
		}
		else
		{
			$json['tipo']=404;
		}
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else
	{
		$json['tipo']=404;
		echo json_encode($json);
	}
?>