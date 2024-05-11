<?php

require_once "Mamifero.php";

class Canguro extends Mamifero{


    public function locomover(){

        echo "    <p>Saltando</p>        ";

    }

    public function usarBolsa(){

        echo "Guardando item na BOLSA";

    }


}