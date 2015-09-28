<?php 
     
     // Sentencia switch
	$carro = "Escarabajo";
	/** 
	 *	La comparación en el switch verifica que 
	 *	la variable se igual a alguno de los datos de los case
	 */
	switch ($carro)
	{
     	case "Neon" :
     		print "Construido por Dodge";
     	break;
	 
    	case "Supra" :
     		print "Construido por Toyota";
     	break;
	 
     	case "Edge" :     	
     		print "Construido por Ford";
     	break;
 	
     	case "Escarabajo" :
     		// En este caso se ejecutara este código
     		print "Construido por Volkswagen";
     	break;
 
     	case "Civic" :
     		print "Construido por Honda";
     	break;
 
     	default:
     		print "Modelo desconocido ";
     	break;
	}

?>