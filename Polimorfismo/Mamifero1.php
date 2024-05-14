<?php 

require_once "Animal.php";
class Mamifero extends Animal{

    public $corPelo;

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



