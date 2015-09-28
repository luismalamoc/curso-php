<?php

	// Otorgar un espacio de nombre
	namespace modelos;

	// Modelo Productos
	class Productos
	{
		var $productos;

		// Obtener todos los productos desde un supuesto manejador de BDD
		public function obtenerTodos()
		{
			// Emulación de la obteción de los productos desde una BDD
			$this->productos = array
			(
				array('id' => 1, 'nombre' => 'Manzana'),
				array('id' => 2, 'nombre' => 'Pera')
			);
		
			return $this->productos;
		}

		// Obtener por ID un producto desde la BDD
		public function obtener($id)
		{
			$this->obtenerTodos();
			return $this->productos[--$id];
		}

	}