<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        
            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Funcionario.php";
            require_once "Professor.php";

            $p = array();
            $p[0] = new Pessoa();
            $p[1] = new Aluno();
            $p[2] = new Professor();
            $p[3] = new Funcionario();

            $p[0]->setNome("Pedro");
            $p[1]->setNome("Maria");
            $p[2]->setNome("Cláudio");
            $p[3]->setNome("Fabiana");

            $p[0]->setSexo("Masculino");
            $p[3]->setSexo("Feminino");

            $p[1]->setCurso("Informatica");
            $p[2]->setSalario(2500.75);
            $p[3]->setSetor("Estoque");

            $p[2]->receberAumento(530);
            $p[3]->mudarTrabalho();
            $p[1]->cancelarMatr();
//


            print_r($p[0]);
            print_r($p[1]);
            print_r($p[2]);
            print_r($p[3]);
        ?>
    </pre>
</body>

</html>