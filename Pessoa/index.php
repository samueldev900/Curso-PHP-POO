<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table><tr><td></td><td></td></tr></table>
    
<pre>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";
    

        $p = array() ;
        $livro = array();

        $p["0"] = new Pessoa("Samuel",24,"Masculino");

        $livro[0] = new Livro("A arte de ligar o  foda-se","Mark Manson",300,$p[0]);


        $livro[0]->detalhes();
        $livro[0]->abrir();

        $livro[0]->folhear(190);
        $livro[0]->detalhes();

    
    
    
    
    ?>
</pre>
    
</body>
</html>