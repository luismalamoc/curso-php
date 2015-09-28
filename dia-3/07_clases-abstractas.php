<?php
 
    // Declarar clase asbtracta con palabra reservada "abstract"
    abstract class Fruta 
    {
        public $color;
        
        /**
         *  el método comer es abstracto por lo tanto debe ser implementado 
         *  por la clase que herede de Fruta. 
         */                
        abstract public function comer();

        public function toString()
        {
            print "Es una fruta\n";
        }
    }
    
    // Extender de clase abstracta (Padre)
    class Naranja extends Fruta 
    {
        public function comer() 
        {
            print "La naranja está un poco ácida\n";
        }
    }
 
    class Patilla extends Fruta 
    {
        public function comer() 
        {
            print "La Patilla es refrescante\n";
        }
    }
    
    // Instanciar y usar la naranja
    $naranja = new Naranja();
    $naranja->toString();
    $naranja->comer();    
    
    /**
     *  Estas dos lineas de código darán error puesto
     *  que no se puede instanciar la clase abstracta Fruta
     */
    $fruta = new Fruta();
    $fruta->comer();

?>