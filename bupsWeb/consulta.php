<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'invoice';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM stocktaking ORDER BY ID";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['stocktaking']))
{
	$q=$conexion->real_escape_string($_POST['stocktaking']);
	$query="SELECT * FROM stocktaking WHERE 
		ID LIKE '%".$q."%' OR
		Product_Name LIKE '%".$q."%' OR
		Lot LIKE '%".$q."%' OR
		Rate LIKE '%".$q."%' OR
		Class LIKE '%".$q."%'";
}
///////////////////// Esta funcion se encarga de hacer la consulta e imprimirla /////////////////////////////////
$buscarProducto=$conexion->query($query);
if ($buscarProducto->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID</td>
			<td>Product_Name</td>
			<td>Lot</td>
			<td>Rate</td>
			<td>Descripacion</td>	
			<td>Categoria</td>
			<td>Imagen</td>
		</tr>';

	while($filaProducto= $buscarProducto->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaProducto['ID'].'</td>
			<td>'.$filaProducto['Product_Name'].'</td>
			<td>'.$filaProducto['Lot'].'</td>
			<td>'.$filaProducto['Rate'].'</td>
			<td>'.$filaProducto['Description'].'</td>
			<td>'.$filaProducto['Class'].'</td>
			<td>'.$filaProducto['Pictures_ID'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';//final de la tabla
} else //Si no se encuentran coincidencias este mensaje aparece
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;//impresion de table
?>
