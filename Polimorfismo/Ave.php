<?php 

require_once "Animal.php";
class Ave extends Animal{

    private $corPena;

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
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}

