<?php 
$bann = "5";    
$lim = "10";     
$together = $bann + $lim;    
echo "Количество фруктов", $together; 
?>
<br>
<br>
<?php 

echo "2 + 2 = ", 2 + 2, "<br>"; 
echo "5 - 2 = ", 5 - 2, "<br>"; 
echo "10 * 10 = ", 10 * 10, "<br>"; 
echo "100 / 2 = ", 100 / 2, "<br>"; 
echo "10 % 2 = ", 10 % 2, "<br>"; 

?>
<br>
<br>
<?php 
$fruits = 14; 
?>
<br>
<?php 
$n = $m = $p = 3; 
echo $n, $m, $p;
?>
<br>
<br>
<?php 
$a = $b = $c = $d = 2; 
echo $a++, "<br>";
echo ++$b, "<br>";
echo $c--, "<br>";
echo --$d, "<br>";
?>
<br>
<br>
<?php 
$d = "Hello";
$f = $d." world";   // Теперь $f = "Hello world"
echo $f; 
echo "<br/>"; 
$f .= " ! ! !";   // Теперь $f = "Hello world ! ! !"
echo $f; 
?>
<br>
<br>
<?php 
$speed = 80;
if ($speed > 60)
    echo "Превышение скорости !";
?>
<br>
<br>
<?php 

$speed = 80;

if ($speed > 60) 
{    // Начало
  echo "Превышение скорости ! <br>";
  echo "Пожалуйста уменьшите скорость !";
}    // Конец

?>
<br>
<br>
