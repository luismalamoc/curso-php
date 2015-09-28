<?php
	
	// Definir clase	
	class EjemploPublic 
	{
		public $variable_public = "\nsoy una variable accesible desde todos lados";

		public function toString()
		{
			print "\nsoy un método accesible desde todos lados";
		}

	}

	// Instanciar
	$obj = new EjemploPublic();

	echo $obj->variable_public;

	$obj->toString();

?>