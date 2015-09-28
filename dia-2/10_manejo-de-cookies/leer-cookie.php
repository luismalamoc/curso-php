<?php
	
	//acceder a valores de la cookie
	if (isset($_COOKIE["moneda"]))
	{
	    echo 'Valor de la Cookie: '. $_COOKIE["moneda"];
	}
	else
	{
    	echo 'No hay Cookies';
	}	

?>
