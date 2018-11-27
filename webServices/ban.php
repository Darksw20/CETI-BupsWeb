<?php 
	include ("conexion.php");
	$json=array();

	if(isset($_POST["CUM"])&&isset($_POST["Pass"]))
	{
		$CUM=$_POST["CUM"];
		$password=$_POST["Pass"];
		$userCum=$_POST['userCum'];

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
				if($userValid==1||$userValid==2)
				{
					$sqlIsBan="SELECT Tipo_Usuario FROM usuario WHERE CUM='".$userCum."'";
					$res_query=mysqli_query($conexion,$sqlIsBan);

					if($reg=mysqli_fetch_array($res_query))
					{
						$tipoUs=$reg['Tipo_Usuario'];
						if($tipoUs!=9)
						{
							$sqlBan="UPDATE usuario SET Tipo_Usuario=9 WHERE CUM='".$userCum."'";

							$json['estadoQuery']=200;
							$json['newUser']=9;//Regresa suma de tallers y concursos
							$reg_query=mysqli_query($conexion,$sqlBan);
						}
						else
						{
							$sqlBan="UPDATE usuario SET Tipo_Usuario=6 WHERE CUM='".$userCum."'";

							$json['estadoQuery']=200;
							$json['newUser']=6;//Regresa suma de tallers y concursos
							$reg_query=mysqli_query($conexion,$sqlBan);
						}
	
					}
					else
					{
						//el usuario no debe ver esto
						$json['estadoQuery']=0;
					}					
				}

			}
			else
			{
				//no hay datos
				$json['estadoQuery']=404;	
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}
	}
	else
	{
		//Hay datos en nulo
		$json['estadoQuery']=420;
		mysqli_close($conexion);
		echo json_encode($json);
	}
