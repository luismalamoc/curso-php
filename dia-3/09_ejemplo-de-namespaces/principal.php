<?php
	
	// Importar clases
	require_once('profesores/Ismael.php');
	require_once('doctores/Ismael.php');

	// Profesor Ismael	
	use profesores\Ismael as Profe; // Definir un Alias
	$ismael = new Profe(); // Intanciar objeto
	print "Profesor en ".$ismael->especialidad." desde ".$ismael->año."\n";

	// Doctor Ismael	
	use doctores\Ismael as Doc; // Definir un Alias
	$ismael = new Doc(); // Intanciar objeto
	print "Doctor en ".$ismael->especialidad." desde ".$ismael->año."\n";	

?>