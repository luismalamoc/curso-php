<?php
	
	// Sentencia condicional if-elseif
	$usuario = "supervisor";

	if ($usuario == "admin")
	{
      	echo 'Hola Admin, tiene todos los permisos';
	}
	else if ($usuario == "supervisor")
	{
      	echo 'Hola Supervisor';
	}
	else
	{
      	echo 'Hola ' . $usuario;
	}

?>