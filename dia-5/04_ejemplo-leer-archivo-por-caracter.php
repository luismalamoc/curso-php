<?php
	
	// Abrir el archivo
	$identificador = fopen("archivo.txt", "r");
	
	/**
	  *  Dentro de un ciclo while se valida si se ha llegado al final del archivo
	  *  en caso de no haber llegado al final entonces se lee otro carácter
	  *  sí se llegó al final entonces no se lee nada y se cierra el archivo.
	  */ 
	while( !feof($identificador) )
	{
 		$caracter = fgetc($identificador). "\n";
  		print $caracter; 
	}
 
	fclose($identificador);

	print 'Se leyó el archivo correctamente';
	
?>