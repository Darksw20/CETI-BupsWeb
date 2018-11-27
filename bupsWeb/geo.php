<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>geo localizacion</title>
<script type="text/javascript">
function loadLocation () {
	//inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
	navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}

//Funcion de exito
function viewMap (position) {
	
	var lon = position.coords.longitude;	//guardamos la longitud
	var lat = position.coords.latitude;		//guardamos la latitud

	var link = "http://www.google.com/maps/d/u/0/edit?mid=1CZ6nTmGGJ8cdsVNIyBGvuPqjNrGIukdX&ll="+lat+","+lon+"&z=18";
	document.getElementById("long").innerHTML = "Longitud: "+lon;
	document.getElementById("latitud").innerHTML = "Latitud: "+lat;

	document.getElementById("link").href = link;

}
https://www.google.com/maps/d/u/0/edit?mid=1CZ6nTmGGJ8cdsVNIyBGvuPqjNrGIukdX&ll=20.70769530824195%2C-103.39304616375279&z=18



function ViewError (error) {
	alert(error.code);
}	



	</script>
	
</head>
<body onload="loadLocation();">
<label id="long"></label> <br/>
<label id="latitud"></label> <br/>
<a id="link" target="_blank">Enlace al mapa</a>


</body>
</html>