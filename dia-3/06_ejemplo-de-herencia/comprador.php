<?php
	
	// Importar clase padre
	require_once('persona.php');

	// Heredar desde clase padre
	class Comprador extends Persona 
	{		

		//Constructor
		public function __construct ($nombre, $apellido, $ci)
		{
			parent::__construct($nombre, $apellido, $ci);		
		}

		// Métodos
		public function comprar()
		{
			print "Comprador " .  $this->nombre . ", compra un producto \n";
		}
		
	}