<?php
	
	// Clase Padre	
	class Persona 
	{
		// Atributos
		public $nombre;
		public $apellido;
		public $ci;

		// Constructor
		public function __construct($nombre, $apellido, $ci)
		{			
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->ci = $ci;
		}

		// Métodos
		public function mostrarDatos()
		{
			print "Nombre: " . $this->nombre . "\n";
			print "Apellido: " . $this->apellido . "\n";
			print "Cédula: " . $this->ci . "\n";
		}
		
	}
