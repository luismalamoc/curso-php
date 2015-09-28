<?php
	
	//crear sesion
	session_start();

	//asignar valores a la sesión
	$_SESSION['nombre'] = 'Francisco de Miranda';
	$_SESSION['natalicio'] = '20 de Marzo de 1750';

	echo htmlentities('sesión iniciada');

?>