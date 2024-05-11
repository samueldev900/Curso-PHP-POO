<?php 
require_once "Animal.php";
class Peixe extends Animal{

    private $corEscama;

    public function soltarBolha(){

        echo "BLU BLU BLU (soltando bloha)";

    }

    public function locomover(){

        echo "Correndo";

    }

    public function alimentar(){

        echo "<p>Mamando</p>";
        
    }
    public function emitirSom(){

        echo "Emitir Som";

        
    }



    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}