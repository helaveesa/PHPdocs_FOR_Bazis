<?php 

$massiv [0] = "PHP"; 
$massiv [1] = "HTML"; 
$massiv [2] = "CSS";

$massiv [1] = "JAVASCRIPT";
$massiv [] = "JQUERY";

for ($counter = 0; $counter < count($massiv); $counter++)
{ 
   echo $massiv[$counter],"<br />";
} 


?>

$counter = 0; - точка отсчета
$counter < count($massiv); - до тех пор поак...
$counter++ - действие по окончанию цикла