<!DOCTYPE html> 
<html>
 <head>
   <title>работа с массивом, через цикл foreach</title>
  <meta charset="utf-8">
  </head>
 <body>
 	<?php
    $mas1 = array ("Yamaha", "Ducati", "HD", "Suzuki", "Aprilliya", "Lifan", "Kawasaki", "Indian", "Triumph"); //создание массива
    // выведем на печать наш массив
    echo "$mas1[0], $mas1[1], $mas1[2], $mas1[3], $mas1[4], $mas1[5], $mas1[6], $mas1[7], $mas1[8]";
    
    // добавим еще один элемент массива 9 элемент
    $mas1[9] = "Honda";
    echo "<br><br>$mas1[0], $mas1[1], $mas1[2], $mas1[3], $mas1[4], $mas1[5], $mas1[6], $mas1[7], $mas1[8], $mas1[9]";
   
    $kol = count ($mas1);  #сколько всего элементов в массиве
    echo "<br><br>$kol";           #всего элементов 9, но печатает 10  

    // массив как переменная
    foreach ($mas1 as $per) {   # данный цикл помещает каждый элемент в переменную $per
    echo "<br><br>$per";
    }
    ?>
 </body> 
</html>