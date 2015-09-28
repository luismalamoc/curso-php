<?php
	
	$identificador = fopen('archivo.txt', 'r');
 
	// se lleva acabo la manipulación y edición del archivo
 
	// por último se cierra
	fclose($identificador);

	print 'Se cerró el archivo correctamente';
	
?>