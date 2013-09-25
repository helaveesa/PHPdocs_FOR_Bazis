<?php 

$speed = 50;

if ($speed < 30)
    echo "Скорость в пределах нормы";
    
elseif ($speed == 20)
    echo "Ваша скорость 20 км,ч";

elseif ($speed == 30)
    echo "Ваша скорость 30 км/час";

elseif ($speed == 40)
    echo "Ваша скорость 40 км/час";

elseif ($speed == 50)
    echo "Ваша скорость 50 км/час";

elseif ($speed == 60)
    echo "Ваша скорость 60 км/час";

else 
    echo "Превышение скорости! Сбавьте скорость!" 
?>
