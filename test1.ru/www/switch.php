<?php 

$speed = 55;

switch($speed)
{
   case 30 : 
   echo "Ваша скорость 30 км/час";
  break;

   case 58 : 
   echo "Ваша скорость 50 км/час";
  break;

   case 70 : 
   echo "Превышение скорости !";
  break;

   default : 
   echo "Скорость в пределах нормы";
  break;

}

?>