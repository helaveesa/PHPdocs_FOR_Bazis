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
    if (isset($_POST["act"], $_POST["ch1"], $_POST["ch2"])):
        switch ($_POST["act"]) {
            case '+':
                $a = $_POST["ch1"] + $_POST["ch2"];
                break;
            case '-':
                $a = $_POST["ch1"] - $_POST["ch2"];
                break;
            case '/':
                $a = $_POST["ch1"] / $_POST["ch2"];
                break;
            case '*':
                $a = $_POST["ch1"] * $_POST["ch2"];
                break;
        }
        print_r($_POST);
    ?>
    Равняется <?=$a?>
    
    <?else:?>
    
    Бедааа!
                
    <?endif;?>
    </body>
</html>
