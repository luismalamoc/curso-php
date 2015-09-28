<?php
	
	// cargar archivos de código fuente de las clases
	require_once('persona.php');
	require_once('comprador.php');
	require_once('vendedor.php');

	// instanciar objetos
	$mauricio = new Persona ('Luis', 'Alamo', '21118719');
	$pedro = new Vendedor ('Pedro', 'Perez', '10543987', '01');
	$juan = new Comprador ('Juan', 'Sanchez', '15426982');

	// ejecutar métodos
	$mauricio->mostrarDatos();
	$pedro->vender();
	$juan->comprar();