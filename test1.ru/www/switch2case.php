<?php 

$speed = 55;

switch($speed)
{
   case 30 : 
   case 58 : 
   echo "Скорость в пределах нормы";
  break;

   case 70 : 
   echo "Превышение скорости !";
  break;

   default : 
   echo "Скорость в пределах нормы";
  break;

}

?>