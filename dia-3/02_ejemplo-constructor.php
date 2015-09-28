<?php
	
	// Definir clase
	class calculadoraBolivar
	{ 
    	public $dolar_bolivar;
    
    	// el constructor tiene que ser un método público
    	public function __construct( $valor_dolar )
    	{
        	$this->dolar_bolivar = $valor_dolar;
	        print 'El valor del Bolívar por dólar es: '. $this->dolar_bolivar;
	    }
    
	    public function dolaresBolivares( $dolares )
	    {
        	return "\n".$dolares.' dolares son '. ($dolares * $this->dolar_bolivar) .' Bolívares.';  
    	}
	}
 
 	// Instanciar objeto
	$calculadora = new calculadoraBolivar(6.30);

	// Utilizar método
	print $calculadora->dolaresBolivares(50);

?>