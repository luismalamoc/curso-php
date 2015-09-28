<?php 
	
	// creación de arreglo vacío
	$arreglo = array();
	
	// creación de arreglo con parámetros.	
	$lenguajes = array('php', 'python', 'ruby', 'java');
	
	//esto devolverá el valor del indice indicado
	echo $lenguajes[1];

	array_push($lenguajes, 'js'); // inserta al final del arreglo
	/** 
	 *	ahora el arreglo es  
	 *	('php', 'python', 'ruby', 'java', 'js')
	 */

	array_pop($lenguajes); // elimina último elemento
	/** 
	 *	ahora el arreglo es  
	 *	('php', 'python', 'ruby', 'java')
	 */

	array_unshift($lenguajes, 'C++'); // inserta al principio del arreglo
	/** 
	 *	ahora el arreglo es  
	 *	('C++', 'php', 'python', 'ruby', 'java')
	 */

	array_shift($lenguajes); // elimina primer elemento
	/** 
	 *	ahora el arreglo es  
	 *	('php', 'python', 'ruby', 'java')
	 */

	//Recorrer Arreglo
	foreach($lenguajes as $lenguaje)
	{
    	echo 'El lenguaje de programación es: '. $lenguaje;
	}

?>