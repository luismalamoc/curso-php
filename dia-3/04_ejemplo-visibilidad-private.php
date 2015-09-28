<?php
    
    // Definir clase
    Class EjemploPrivate 
    { 
        public $var_publica = 'variable publica';
        private $var_privada = 'variable privada';
 
        public function soyPublico($publico)
        {
            print $publico;
        }
    
        private function soyPrivado($privado)
        {
            print $privado;
        }
 
        public function usarPrivados()
        {
            $this->var_privada = "\nutilizando la atributo privado desde adentro de la clase";
            $this->soyPrivado("\nllamando al método privado desde adentro de la clase");
        }
    }
    
    // Instanciar objeto
    $obj = new EjemploPrivate();
 
    // Esto funciona bien porque el atributo es publico
    $obj->var_publica = 'cambiando atributo publico';
 
    /**
     *  Esta linea dara error porque el atributo es privado
     *  y por lo tanto no se puede acceder al mismo desde un objeto.
     */
    $obj->var_privada = 'cambiando atributo privado';
 
    // Este método se ejecutará sin ningún problema ya que es público
    $obj->soyPublico('probando público');
 
    // Este método no se podrá ejecutar ya que es privada
    $obj->soyPrivado('probando privado');
 
    /**
     *  Este método se podrá ejecutar aunque en su interior llama 
     *  a un atributo y un método privados, esto ocurre ya que 
     *  se están llamando desde adentro de la clase y 
     *  desde afuera se llama a la publica.     
     */
    $obj->usarPrivados();

?>