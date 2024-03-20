<?php 

    require_once "Lutador.php";

    class Luta{


        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;


        public function marcarLuta($l1,$l2){
            if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){

                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->desafiante = null;
                $this->desafiado = null;
            }

        }
        public function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);

                switch($vencedor){

                    case 0:
                        echo "<p>Empate</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                        
                    case 1:
                        echo "<p>".  $this->desafiado->getNome() ." Vence<p/>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;

                    case 2:
                        echo "<p>".  $this->desafiante->getNome() ." Vence<p/>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }

            }else{

                echo "A luta não pode acontecer";
            }
        }

        

        /**
         * Get the value of desafiado
         */ 
        public function getDesafiado()
        {
                return $this->desafiado;
        }

        /**
         * Set the value of desafiado
         *
         * @return  self
         */ 
        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        /**
         * Get the value of desafiante
         */ 
        public function getDesafiante()
        {
                return $this->desafiante;
        }

        /**
         * Set the value of desafiante
         *
         * @return  self
         */ 
        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        /**
         * Get the value of rounds
         */ 
        public function getRounds()
        {
                return $this->rounds;
        }

        /**
         * Set the value of rounds
         *
         * @return  self
         */ 
        public function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        /**
         * Get the value of aprovada
         */ 
        public function getAprovada()
        {
                return $this->aprovada;
        }

        /**
         * Set the value of aprovada
         *
         * @return  self
         */ 
        public function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }

?>