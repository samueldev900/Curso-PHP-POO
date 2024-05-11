<?php 

require_once "Animal.php";


class Reptil extends Animal{

    public $corEscama;
    
    public function locomover(){

        echo "Correndo";

    }

    public function alimentar(){

        echo "<p>Mamando</p>";
        
    }
    public function emitirSom(){

        echo "Emitir Som";

        
    }
    
}