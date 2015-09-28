<?php
		
	/**
	 *	sort()
	 *	Sirve para ordenar un arreglo no asociativo, recibe dos parámetros. 
	 * 	El primero es el arreglo que se va a modificar y el segundo es el tipo de algoritmo
	 * 	que en él se va a aplicar(SORT_NUMERIC, SORT_STRING, etc.).
	 */
	sort($arreglo, SORT_NUMERIC);

	/**
	 *	ksort()
	 *	Lo mismo que sort() pero funciona para ordenar arreglos asociativos por la clave.
	 */
	ksort($arreglo_asociativo, SORT_STRING);

	/**
	 *	asort()
	 *	Lo mismo que sort() pero funciona para ordenar arreglos asociativos por el valor.
	 */
	asort($arreglo_asociativo, SORT_STRING);

	/**
	 *	print_r()
	 *	Imprime todos los elementos del arreglo que recibe como parámetro.
	 */
	print_r($arreglo);

	/**
	 *	in_array()
	 *	Busca un valor(Primer Parámetro) en un arreglo(Segundo Parametro) 
	 *	y devuelve True si lo consigue o False de lo contrario.
	 */
	$busqueda = in_array('manzana', $frutas);

	/**
	 *	array_keys()
	 *	Recibe como parametro un arreglo asociativo y retorna un arreglo sólo con las claves. 
	 */
	$claves = array_keys($arreglo_asociativo);

	/**
	 *	array_search()
	 *	Busca un valor(Primer Parametro) en un arreglo(Segundo Parámetro) 
	 *	y devuelve la posición si lo consigue. 
	 */
	$busqueda = array_search('paralelepípedo', $figuras);

?>