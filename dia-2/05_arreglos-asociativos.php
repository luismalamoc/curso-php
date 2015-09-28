<?php
	
	//arreglo asociativo Clave => Valor
	$persona = array
	(
		'nombre'	=>	'Luis', 
		'apellido'	=>	'Álamo', 
		'ciudad'	=>	'Los Teques', 
		'estado'	=>	'Miranda',
		'nacionalidad'=>'venezolana'
	);

	//acceder al apellido
	echo $persona['apellido'];

	//recorrer arreglo
	foreach( $persona as $clave => $valor)
	{
    	echo 'Clave: '. $clave .', Valor: '. $valor;
	}
	/**
	 *	imprimirá lo siguiente
	 *	Clave: nombre, Valor: Luis
	 *	...
	 */

?>