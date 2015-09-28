<?php

	class Carro 
	{
		// Atributos
 		var $color;
    	var $numero_puertas;
    	var $marca;
    	var $gasolina = 0;
    	
    	// Métodos
    	function llenarTanque($gasolina_nueva)
    	{
	        $this->gasolina = $this->gasolina + $gasolina_nueva;
	    }
 
    	function acelerar()
    	{
	        if ($this->gasolina > 0)
	        {
            	$this->gasolina = $this->gasolina - 1;
            	return "\nGasolina restante: ".$this->gasolina;
        	}
    	}
	}
 
	$carro = new Carro(); // Se instancia el objeto Carro
	$carro->color = 'Rojo'; // Se llenan algunas de las propiedades
	$carro->marca = 'Honda';
	$carro->numero_puertas = 4;
	$carro->llenarTanque(10); // se utilizan los métodos
	print $carro->acelerar();
	print $carro->acelerar();
	print $carro->acelerar();

?>