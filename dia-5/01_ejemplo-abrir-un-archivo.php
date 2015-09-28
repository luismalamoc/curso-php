<?php
	
	/**
	 *	Principales tipos de apertura que tiene PHP:
	 *
	 *	--> ‘r’: Abre el archivo sólo para lectura. Se comienza a leer al principio del archivo.
     *	--> ‘r+’: Abre el archivo para lectura y escritura. Se comienza a leer al principio del archivo.
     *	--> ‘w’: Abre el archivo sólo para escritura. Borra todo y se escribe desde el principio. 
	 *	Si el archivo no existe entonces lo intenta crear.
     *	--> ‘w+’: Abre el archivo para lectura y escritura. 
     *	Se comienza a leer desde el principio y borra todo si se escribe algo. 
     *  Si el fichero no existe entonces lo intenta crear.
     *	--> ‘a’: Abre el archivo sólo para escritura. 
     * 	Se escribe al final del archivo y si no existe entonces se crea.
     *	--> ‘a+’: Abre el archivo para lectura y escritura. 
     * 	Se comienza a escribir al final del archivo y si no existe se crea.
	 */
     $identificador = fopen('archivo.txt', 'r');
	
     if($identificador)
     {
          print 'Se abrió el archivo correctamente';
     }
     else
     {
          print 'Error al abrir archivo';
     }

?>