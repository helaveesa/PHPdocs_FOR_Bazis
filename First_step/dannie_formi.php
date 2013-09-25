<!DOCTYPE HTML>
<html>
    <head>
        <title>Пример</title>
    </head>
    <body>
<title>Здравствуйте, </title>
<?php 
echo htmlspecialchars($_POST['name']); 
?>.
Вам 
<?php echo (int)$_POST['age']; 
?> 
лет.
    </body>
</html>