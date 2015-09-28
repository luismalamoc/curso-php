<?php
	
	// Datos para conectarse al motor de BDD
	$usuario = 'prueba';
	$clave = '12345';
	$anfitrion = 'localhost';
	$nombre_bdd = 'ejemplo';

	// Valor recibido por método GET mediante AJAX
	$id = $_GET['parametro'];

	// Identificador del registro a consultar
	$registro = array(':id' => $id);

	try 
	{
    	// Intentar conectarse a la bdd
  		$bdd = new PDO("mysql:host=$anfitrion;dbname=$nombre_bdd", $usuario, $clave);
  		// Activar manejo de errores
  		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// Preparar query
		$sql = 'SELECT * FROM persona WHERE id = :id';
    	$resultado = $bdd->prepare($sql);
  		// Ejecutar operación
  		$resultado->execute($registro); 
  		// Obtener registro
  		$fila = $resultado->fetch();
  		if($fila)
  		{
  			// Imprimirlo en un formato manejable por JS
			echo json_encode($fila);
    	}
    	else
    	{
    		echo json_encode(null);
    	}
	} 
	catch(PDOException $e) 
	{
    	echo json_encode(null);
	}
	// Desconectarse.
	$bdd = null;

?>