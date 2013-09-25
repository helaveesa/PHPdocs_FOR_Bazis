<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Простая ЭВМ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">     
    </head>
    <body>
    <?php
    $a = $_POST["ch1"] + $_POST["ch2"];
    $b = $_POST["ch3"] - $_POST["ch4"];
    $c = $_POST["ch5"] * $_POST["ch6"];
    $d = $_POST["ch7"] / $_POST["ch8"];
    ?>
    Итог суммы двух чисел <?=$a?>
    <br>
    Итог разности двух чисел <?=$b?>
    <br>
    Итог произведения двух чисел <?=$c?>
    <br>
    Частное от деления двух чисел <?=$d?>
    </body>
</html>
