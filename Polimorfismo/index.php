<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        require_once "animais/Tartaruga.php";
        require_once "animais/goldFish.php";
        require_once "animais/Cobra.php";
        require_once "animais/Canguro.php";
        require_once "animais/Cachorro.php";
        require_once "animais/Arara.php";

        $tartaruga = new Tartaruga();
        $peixeGold = new goldFish();
        $cascavel = new Cobra();
        $canguru = new Canguro();
        $dog = new Cachorro();
        $arara = new Arara();   

        $tartaruga->locomover();
        $peixeGold->locomover();
        $cascavel->locomover();
        $canguru->locomover();
        $dog->locomover();
        $arara->locomover();




    ?>
    
</body>
</html>