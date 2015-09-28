<?php
	
	// Abrir el archivo
	$identificador = fopen("archivo.txt", "r");
	
	/**
	  *  Dentro de un ciclo while se va validando si se ha llegado al final del archivo
 	  *	 en caso de que no haber llegado al final entonces se lee otra línea
 	  *  si se llegó al final entonces no se lee nada y se cierra el archivo. 
	  */ 	 
 
	while( !feof($identificador) )
	{
 		$linea = fgets($identificador). "\n";
  		print $linea;
  	}
 
	fclose($identificador);

	print 'Se leyó el archivo correctamente';
?>