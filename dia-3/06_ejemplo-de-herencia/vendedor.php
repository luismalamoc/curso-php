<?php
	
	// Importar clase padre
	require_once('persona.php');

	// Heredar desde clase padre
	class Vendedor extends Persona 
	{
		// Atributos
		public $idVendedor;

		// Constructor
		public function __construct ($nombre, $apellido, $ci, $idVendedor)
		{
			parent::__construct($nombre, $apellido, $ci);
			$this->idVendedor = $idVendedor;			
		}

		// Métodos
		public function vender()
		{
			print "Vendedor " .  $this->nombre . " con número: " . $this->idVendedor . ", vende un producto \n";
		}
	}