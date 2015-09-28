var codigo;

$(document).on("click", "#boton", function()
{	
	$.ajax(
	{	
		url:"buscar.php",
		type:"GET",
		data:
		{
			'parametro': $("#parametro").val()											
		},
		dataType:"JSON",
		success:function(respuesta)
		{				
			if(respuesta === null)
			{				
				alert('No se encontraron resultados');
			}
			else
			{										
				codigo = "<br><div>Su resultado es: "+respuesta.id+" "+respuesta.nombre+" "+respuesta.apellido+"</div>";		
				$("#resultado").html(codigo);		
			}														
		},
		error:function(respuesta)
		{				
			alert('Error inesperado!');									    
		}
	});	
	return false;
});