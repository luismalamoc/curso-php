<?php
	
	//se crea arreglo vacío
	$libros = array();

	//primer elemento
	$libros[0] = array
	(
		'titulo'=>'Las Venas Abiertas de América Latina', 
		'autor'=>'Eduardo Galeano'
	);

	//segundo elemento
	$libros[1] = array
	(
		'titulo'=>'Los Hombres de Marte, Las Mujeres son de Veneus', 
		'autor'=>'John Gray'
	);

	//Acceder al primer elemento
	echo $libros[0]['titulo'];

?>