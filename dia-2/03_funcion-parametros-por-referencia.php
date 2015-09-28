<?php

	//& para hacer referencia
	function sumarNumeros (&$parametro1, &$parametro2)
	{
        $parametro1 += 10;
        $parametro2 += 10;
        return $parametro1 + $parametro2;
	}
 
	$param1 = 10;
	$param2 = 20;
 
	echo "Antes param1 = ".$param1.", param2 = ".$param1." <br>";
	sumarNumeros ($param1, $param2);
	echo "Después param1 = ".$param1.", param2 = ".$param1."<br>";

	// Antes param1 = 10, param2 = 20
	// Después param1 = 20, param2 = 30
	 
?>