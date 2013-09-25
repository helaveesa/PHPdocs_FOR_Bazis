<?php 

$massiv [0] = "PHP"; 
$massiv [1] = "HTML"; 
$massiv [2] = "CSS";

echo "Now is: ", current($massiv), "<br>";
echo "Next is: ", next($massiv), "<br>";
echo "Previously is: ", prev($massiv), "<br>";
echo "The end is: ", end($massiv), "<br>";
echo "First is: ", reset($massiv), "<br>"; 

?>