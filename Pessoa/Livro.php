<?php 
    
    require_once "Publicacao.php";

    class Livro implements Publicacao{


        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;


        public function __construct($titulo,$autor,$totPaginas,$leitor) {
           $this->titulo = $titulo;
           $this->autor = $autor;
           $this->totPaginas = $totPaginas;
           $this->leitor  = $leitor;
           $this->pagAtual= 0;
           $this->aberto = false;
        }

        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($p){
            if($this->aberto){

                if($p >$this->totPaginas){

                    $this->pagAtual=0;

                }else{
                    
                    $this->pagAtual= $p;

                }


            }else{
                echo"ERRO, não foi possivel folhear, abra o livro primeiro";
            }
        }
        public function avançarPg(){
            $this->pagAtual++;
        }
        public function voltarPg(){
            $this->pagAtual--;
            
        }

        public function detalhes(){
            echo"<hr></hr>";
            echo"<table><tr><td>Titulo: </td><td>". $this->getTitulo() ."</td></tr></table>";
            echo"<table><tr><td>Escrito por: </td><td>". $this->getAutor() ."</td></tr></table>";
            echo"<table><tr><td>Totoal de Páginas: </td><td>". $this->getTotPaginas() ."</td></tr></table>";
            echo"<table><tr><td>Pagina atual: </td><td>". $this->getPagAtual() ."</td></tr></table>";
            echo"<table><tr><td>Leitor atual: </td><td>". $this->leitor->getNome() ."</td></tr></table>";


        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of autor
         */ 
        public function getAutor()
        {
                return $this->autor;
        }

        /**
         * Set the value of autor
         *
         * @return  self
         */ 
        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        /**
         * Get the value of totPaginas
         */ 
        public function getTotPaginas()
        {
                return $this->totPaginas;
        }

        /**
         * Set the value of totPaginas
         *
         * @return  self
         */ 
        public function setTotPaginas($totPaginas)
        {
                $this->totPaginas = $totPaginas;

                return $this;
        }

        /**
         * Get the value of leitor
         */ 
        public function getLeitor()
        {
                return $this->leitor;
        }

        /**
         * Set the value of leitor
         *
         * @return  self
         */ 
        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;

                return $this;
        }

        /**
         * Get the value of pagAtual
         */ 
        public function getPagAtual()
        {
                return $this->pagAtual;
        }

        /**
         * Set the value of pagAtual
         *
         * @return  self
         */ 
        public function setPagAtual($pagAtual)
        {
                $this->pagAtual = $pagAtual;

                return $this;
        }
    }

