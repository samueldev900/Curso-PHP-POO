<?php 
class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade,$altura,$peso;
    private $categoria, $vitorias,$derrotas,$empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }


    public function apresentar() {
        echo "<p>========================================</p>";
        echo '<table>';
        echo '<tr><td>lutador: </td><td>'.$this->getNome().'</td></tr>' ;
        echo '<tr><td>Nacionalidade: </td><td> '.$this->getNacionalidade().'</td></tr>';
        echo '<tr><td>Idade: </td><td>'.$this->getIdade().'</td></tr>' ;
        echo '<tr><td>Altura:</td><td> '.$this->getAltura() .'</td></tr>';
        echo '<tr><td>Peso: </td><td>'.$this->getPeso() .'</td></tr>';
        
        echo '<tr><td>Categoria: </td><td>'.$this->getCategoria().'</td></tr>';
        /* echo '<tr><td>Lutas: </td><td>'.$this->getLutas() .'</td></tr>'; */
        echo '<tr><td>Vitorias: </td><td>'.$this->getVitorias() .'</td></tr>';
        echo '<tr><td>Derrotas: </td><td>'.$this->getDerrotas() .'</td></tr>';
        echo '<tr><td>Empates: </td><td>'.$this->getEmpates().'</td></tr>' ;
        echo '</table>';
        
    }
    function status(){
        echo "<p>========================================</p>";
        echo "
        <table>
            <tr><td>Nome: </td><td>".$this->getNome()."</td></tr>
            <tr><td>Categoria: </td><td>" .$this->getCategoria()."</td></tr>
            <tr><td>Vitórias:</td><td>" .$this->getVitorias()."</td></tr>
            <tr><td>Derrotas:</td><td>" .$this->getDerrotas()."</td></tr>
            <tr><td>Empates:</td><td>" .$this->getEmpates()."</td></tr>
        </table>";        
        
    }   

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }   

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    

    public function getNome()
    {
        return $this->nome;
    }

 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }


    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }


    public function getPeso()
    {
        return $this->peso;
    }


    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();

        return $this;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria()
    {   
        if($this->peso < 52.2){
            $this->categoria =  "Inválido";
        }elseif($this->peso <= 70.3){
            
            $this->categoria = "Leve";

        }elseif($this->peso <=83.9){

            $this->categoria = "Medio";

        }elseif($this->peso <=120.2){
            $this->categoria = "Pesado";
        }
        else{
            $this->categoria = "Inválido";
        }
    }

    /**
     * Get the value of vitorias
     */ 
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * Set the value of vitorias
     *
     * @return  self
     */ 
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    /**
     * Get the value of derrotas
     */ 
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set the value of derrotas
     *
     * @return  self
     */ 
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    /**
     * Get the value of empates
     */ 
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * Set the value of empates
     *
     * @return  self
     */ 
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
}


?>