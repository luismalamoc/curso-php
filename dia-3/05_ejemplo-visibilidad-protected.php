<?php
	
	// Definir clases
	class pruebaPadre
	{
	    protected function metodoProtegido()
	    {
        	print 'Llamando a método protegido del padre';
    	} 
	}
 
	class pruebaHijo extends pruebaPadre
	{
 		public function metodoPublico()
		{
        	$this->metodoProtegido();
    	}
	}
 	
 	// Instanciar objeto padre
	$objPadre = new pruebaPadre();
 
	/**
	 *	Este llamado al método ocasionará error, 
	 *	ya que está protegido y sólo se puede llamar
	 *	desde adentro de la clase.
	 */
	$objPadre->metodoProtegido();
 	
 	// Instanciar objeto hijo
	$objHijo = new pruebaHijo();
 
 	/**
 	 *	Este método público llama al método protegido de
 	 *	la clase padre y no ocasionará error porque el llamado
 	 *	al método protegido se hace desde adentro de la clase.		
 	 */
	$objHijo->metodoPublico();

?>