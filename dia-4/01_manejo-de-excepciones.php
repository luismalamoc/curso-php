<?php

	// Función propensa a errores
	function inverso($x) 
	{
    	if ($x == 0) 
    	{
    		// Si es igual a 0 arrojar excepción
        	throw new Exception('División por cero.');
    	}
    	else 
    	{
    		return 1/$x;
    	}
	}

	// Tratar de ejecutar función propensa a errores
	try 
	{
    	echo inverso(5) . "\n";
    	echo inverso(0) . "\n";
	} 
	// Capturar excepcion
	catch (Exception $e) 
	{
    	echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	}

	// Continuar la ejecución
	echo "Continuar con la ejecución del programa\n";

?>
