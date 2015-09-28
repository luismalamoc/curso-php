<?php
	
	// Definir interfaces
	interface Interaccion 
	{    	
    	public function encender();
    	public function apagar();
	}
 
	interface Direccion 
	{	
    	public function girarDerecha();
    	public function girarIzquierda();
	}

	// Hacer uso de la interfaz
	class Televisor implements Interaccion 
	{
		// Implementar métodos de la interfaz
    	public function encender() 
    	{
        	print "Se encendió el televisor\n";
    	}
 
    	public function apagar() 
    	{
        	print "Se apagó el televisor\n";
    	}
	}
 
	class Carro implements Interaccion, Direccion 
	{
    	// Implementar métodos de las interfaces
	    public function encender() 
	    {
        	print "Se encendió el carro\n";
    	}
 
    	public function apagar() 
    	{
        	print "Se apagó el carro\n";
    	}    	

    	public function girarIzquierda()
    	{
        	print "El carro cruzó a la izquierda\n";
    	}

    	public function girarDerecha()
    	{
        	print "El carro cruzó a la derecha\n";
    	}
	}

    // Instanciar objetos
    $tv = new Televisor();
    $tv->encender();

    $carro = new Carro();
    $carro->girarIzquierda();

?>