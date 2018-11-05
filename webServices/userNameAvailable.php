<?php 

	$db_hostname='localhost';
	$db_database='prueba';
	$db_username='root';
	$db_password='';
	$json=array();

	if (isset($_POST['CUM'])) 
	{
		$CUM=$_POST["CUM"];
		
		//$CUM="JAL0720230";
		
		$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
		if($conexion)
		{
			$query="SELECT * FROM usuario WHERE CUM='".$CUM."'";
			$res_query=mysqli_query($conexion,$query);
			if($valid=mysqli_fetch_array($res_query))
			{

				$json['validado']=true;

			}
			else
			{
				$json['validado']=false;
			}
		}
			/*
				Aqui se hace un script para revisar que existan el usuario ingresado
			*/
			
			mysqli_close($conexion);
			//print "[";
			echo json_encode($json);
			//print "]";
	}
	else
	{

		$json['validado']=false;
		//echo json_encode($json);
	}

	?>