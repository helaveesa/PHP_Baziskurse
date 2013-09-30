<!DOCTYPE html> 
<html>
 <head>
   <title>работа с массивом</title>
  <meta charset="utf-8">
  </head>
 <body>
 	<?php
    $mas1 = array ("Yamaha", "Ducati", "HD", "Suzuki", "Aprilliya", "Lifan", "Kawasaki", "Indian", "Triumph"); //создание массива
    // выведем на печать наш массив
    echo "$mas1[0], $mas1[1], $mas1[2], $mas1[3], $mas1[4], $mas1[5], $mas1[6], $mas1[7], $mas1[8]";
    
    // соберем массив по заданному разделителю в строку
    $str = "Yamaha-Ducati-HD-Suzuki-Aprilliya-Lifan-Kawasaki-Indian-Triumph";
    $str = implode (":::", $mas1);
    echo "<br><br>$str";
    
    // добавим еще один элемент массива 9 элемент
    $mas1[9] = "Honda";
    echo "<br><br>$mas1[0], $mas1[1], $mas1[2], $mas1[3], $mas1[4], $mas1[5], $mas1[6], $mas1[7], $mas1[8], $mas1[9]";
    
    $mas = array_reverse ($mas1);   #перевернем массив
    //echo "<br><br>$mas";  #данная конструкция выводит только слово Array, для вывода массива с элементами нужно пользоваться циклом
    foreach($mas as $per) {
    echo "<br><br>$per";
    }    #например таким, и здесь видно, что все перевернуто нормально 
    
    $kol = count ($mas1);  #сколько всего элементов в массиве
    echo "<br><br>$kol";           #9 элементов в массиве было изначально. Потом была еще $mas1[9] = "Honda";
    ?>
 </body> 
</html>