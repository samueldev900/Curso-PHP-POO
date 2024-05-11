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
        require_once "Bolsista.php";
    

        $p = array() ;
        $livro = array();

        $p = new Bolsista("Samuel",24,"Masculino");

        $p->pagarMensalidade();    
    
    
    
    ?>
</pre>
    
</body>
</html>