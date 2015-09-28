<?php
	
	// Abrir archivo
	$identificador = fopen('archivo.txt', 'a');
 
	// Escribir de manera continua en el archivo sin hacer salto de línea por sí solo
	fwrite($identificador, 'Primeras palabras');
 
	// Ejecutar un salto de línea se puede usar la constante PHP_EOL(php_end_of_line)
	fwrite($identificador, 'Segundas palabras'.PHP_EOL);
 
	fwrite($identificador, 'Nueva línea');
 	
 	// Cerrar archivo
	fclose($identificador);

	print 'Se escribió el archivo correctamente';

?>