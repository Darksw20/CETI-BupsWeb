$(obtener_registros());
//Funcion para obtener datos de productos
function obtener_registros(stocktaking)
{
	//definir de donde tomar datos y como ("espesificaciones")
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { stocktaking: stocktaking },
		})
//pasar los datos
	.done(function(resultado){
		$("#tabla_resultado").html(resultado);//impresion en el section de html 
	})
}
//realizar la busqueda con el id busqueda desde el input
$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
