<?php
	
	/**
	 *	Ejecutar de primero script SQL desde la consola de Mysql
	 *	$ mysql -h localhost -u root -p < ejemplo.sql
	 */

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
    	// Enviar mensaje satisfactorio
    	echo 'Se ha conectado correctamente';
	} 
	catch(PDOException $e) 
	{
    	echo 'ERROR: ' . $e->getMessage();
	}
	// Desconectarse.
	$bdd = null;
	
?>



 
