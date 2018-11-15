<?php
	require('../datos/conexion2.php');
	//var_dump($_POST);
	$cum = $cn->real_escape_string($_POST['cum']);
	$pass = $cn->real_escape_string($_POST['password']);
	var_dump($cum);
	var_dump($pass);
		if (!empty($cum) && !empty($pass)) {
			$consulta = "SELECT Tipo_Usuario FROM usuario WHERE CUM = '$cum' AND Password = '$pass' LIMIT 1";
			$resultado = $cn->query($consulta);
			if ($resultado->num_rows > 0) {
				$fila = $resultado->fetch_row();
				session_start();
			//	$_SESSION['User_Name'] = $fila[0];
			//	$_SESSION['Mail'] = $cum;
			//	$_SESSION['Amount'] = $fila[3];
				$_SESSION['Tipo_Usuario'] = $fila[0];
			//	var_dump($_SESSION['Tipo_Usuario']);
			//	$_SESSION['Name'] = $fila[5];
			//	$_SESSION['Last_Name'] = $fila[6];
			//	$_SESSION['Phone_Number'] = $fila[7];
			//	$_SESSION['Address_Code'] = $fila[8];
				header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
				header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
				header("Cache-Control: no-store, no-cache, must-revalidate");
				header("Cache-Control: post-check=0, pre-check=0", false);
				header("Pragma: no-cache");
				if($_SESSION['Tipo_Usuario'] == 6){
					header("Location: ../Html/login2.php");
				} elseif ($_SESSION['Tipo_Usuario'] == 1) {
					header("Location: ../sideBarAdmin.php");
				}	elseif ($_SESSION['Tipo_Usuario'] == 2) {
					header("Location: ../sideBarOrga.php");
				}	elseif ($_SESSION['Tipo_Usuario'] == 3) {
					header("Location: ../sideBarSmedi.php");
				}	elseif ($_SESSION['Tipo_Usuario'] == 8) {
					header("Location: ../sideBarStaff.php");
				}	elseif ($_SESSION['Tipo_Usuario'] == 7) {
					header("Location: ../Html/login2.php");
				}
			} else {
				header("Location: ../Html/login2.php");
			}
	}
	if (empty($_SESSION)) {
  		header("Location: ../Html/login2.php");
	}
?>
