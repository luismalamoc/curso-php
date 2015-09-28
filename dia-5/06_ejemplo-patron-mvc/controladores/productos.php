<?php	
	
	// Otorgar un espacio de nombre
	namespace controladores;
	// Requerir modelo Productos
	require 'modelos/productos.php';
	// Asignarle un Alias
	use modelos\Productos as Modelo_Productos;
	// Controlador Productos
	class Productos
	{
		// Método que obtiene todos los productos
		public function obtenerTodos()
		{
			// Instanciar modelo		
			$modelo = new Modelo_Productos();
			// Obtener resultado
			$resultado = $modelo->obtenerTodos();
			// Llamar a la vista
			require 'vistas/productos.php';
		}
		
		// Método que obtiene todos los productos
		public function obtener($id)
		{
			// Instanciar modelo		
			$modelo = new Modelo_Productos();
			// Obtener resultado
			$producto = $modelo->obtener($id);
			// Llamar a la vista
			require 'vistas/producto.php';
		}
	}