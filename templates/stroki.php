<!DOCTYPE html> 
<html>
 <head>
   <title>работа со строками</title>
  <meta charset="utf-8">
  </head>
 <body>
 	<?php
    $str = "мотоциклы различаются";
    $ps = substr ($str,0,9);
    echo "<br><br>$ps";
    
    // поиск по строке, первое вхождение
    $pos = strpos ($str, "м",0);
    echo "$pos";   
	?>
 </body> 
</html>