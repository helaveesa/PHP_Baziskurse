<!DOCTYPE html> 
<html>
 <head>
   <title>Шахматная доска</title>
  <meta charset="utf-8">    
 </head> 
 <body bgcolor= #5F9EA0>
 <center>
<br><br>
<table cellspacing=0>
<tr>
<td height=50 weight=50></td>
<td height=50><center>a</td>
<td height=50><center>b</td>
<td height=50><center>c</td>
<td height=50><center>d</td>
<td height=50><center>e</td>
<td height=50><center>f</td>
<td height=50><center>g</td>
<td height=50><center>h</td>
</tr>
...
  </table>
 </body>
</html>
<!-- формирование таблицы -->
 	<?php
     /* если четная цифра - то чередование начинается с черного цвета, 
     если нечетная цифра - то чередование начинается с белого цвета */
    
     // нужно создать таблицу 8Х8, у которой ячейки именовались цифра-буква цифры от 1-8 и буквы от a - h
    
        echo '<table border = 1 width = 100>';
        for ($i=0; $i<=10; $i++)
        {
        echo "<tr><td>$i</td></tr>";
        }
        echo '</table>';
	?>
 </body> 
</html>