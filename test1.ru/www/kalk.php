<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">     
    </head>
    <body>
    <?php
    $i = 0;
    switch ($i) {
    case '+':
        echo "+";
        break;
    case '-':
        echo "-";
        break;
    case '/':
        echo "/";
        break;
    case '*':
        echo "*";
        break;
}
var_dump($_POST);
    $c = $_POST["ch1"] + $_POST["ch2"];
    ?>
    Равняется <?=$c?>
    </body>
</html>
