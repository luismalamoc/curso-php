<?php

	/**
	  *	 Cada URL se dirigirá aquí.
	  *	 Hay que ejecutar diferentes controladores-acciones en función de la URL
	  *	 Pero en este ejemplo siempre se carga el controlador de "productos" y
	  *  Ejecuta la acción "todos".
	  */ 
	require 'controladores/productos.php';

	use controladores\Productos as Controlador_Productos;

	$controlador = new Controlador_Productos();

	switch (@$_GET['metodo']) 
	{
		case 'obtener':
			$controlador->obtener($_GET['id']);
		break;
		
		default:
			$controlador->obtenerTodos();
		break;
	}		

?>