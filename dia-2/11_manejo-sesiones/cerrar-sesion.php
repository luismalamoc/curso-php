<?php
	
	session_start();
	// eliminar la sesion
	session_destroy();

	echo htmlentities('se ha cerrado sesión');

?>