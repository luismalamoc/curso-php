<?php	
	
	session_start();

	//leer una sesion
	if(isset($_SESSION['nombre']) && isset($_SESSION['natalicio']))
	{
		echo 'El natalicio de '. $_SESSION['nombre'] .' es el '. $_SESSION['natalicio'];
	}
	else
	{
		echo htmlentities('no se ha iniciado sesión');
	}

?>