<?php
	
	// Datos para conectarse al motor de BDD
	$usuario = 'prueba';
	$clave = '12345';
	$anfitrion = 'localhost';
	$nombre_bdd = 'ejemplo';

	try 
	{
    	// Intentar conectarse a la bdd
  		$bdd = new PDO("mysql:host=$anfitrion;dbname=$nombre_bdd", $usuario, $clave);
  		// Activar manejo de errores
  		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// Preparar query
		$sql = 'SELECT * FROM persona';
    	$resultado = $bdd->prepare($sql);
  		// Ejecutar operación
  		$resultado->execute(); 
  		// Obterner registros
  		$filas = $resultado->fetchAll();
  		if($filas)
  		{
			foreach($filas as $fila) 
			{
	        	echo $fila['id'].' '.$fila['nombre'].' '.$fila['apellido'].'<br>';
    		}
    	}
    	else
    	{
    		echo 'No se encontraron registros.';
    	}
	} 
	catch(PDOException $e) 
	{
    	echo 'ERROR: ' . $e->getMessage();
	}
	// Desconectarse.
	$bdd = null;

?>