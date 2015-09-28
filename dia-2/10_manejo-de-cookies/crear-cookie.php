<?php
	
	//valores básicos para la cookie
	$nombre = "moneda";
	$valor = htmlentities("Bolívares");
	$expiracion = time()+60*60*24*30; // durará 30 días
	
	// crear cookie
	setCookie($nombre, $valor, $expiracion);

	echo 'cookie creada';

?>
