<?php
	
	// Datos para conectarse al motor de BDD
	$usuario = 'prueba';
	$clave = '12345';
	$anfitrion = 'localhost';
	$nombre_bdd = 'ejemplo';

	// Registro a actualizar
	$registro = array(':id'=> 1, ':nombre' => 'Luis Mauricio');

	try 
	{
		// Intentar conectarse a la bdd
  		$bdd = new PDO("mysql:host=$anfitrion;dbname=$nombre_bdd", $usuario, $clave);
  		// Activar manejo de errores
  		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		// Preparar query
 		$sql = 'UPDATE persona SET nombre = :nombre WHERE id = :id';
  		$resultado = $bdd->prepare($sql);
  		// Ejecutar operación
  		$resultado->execute($registro); 
  		// ¿Columnas afectadas?
  		echo 'Registro actualizado, filas afectadas: '.$resultado->rowCount(); // 1
	} 
	catch(PDOException $e) 
	{
  		echo 'Error: ' . $e->getMessage();
  	}
  	// Desconectarse.
	$bdd = null;

?>