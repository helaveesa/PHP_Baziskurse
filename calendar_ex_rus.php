<?php
  ...
  // Выводим содержимое массива $week
  // в виде календаря
  // Выводим таблицу
  echo "<table border=1>";
  for($j = 0; $j < 7; $j++)
  {
    echo "<tr>";
    for($i = 0; $i < count($week); $i++)
    {
      if(!empty($week[$i][$j]))
      {
        // Если имеем дело с субботой и воскресенья
        // подсвечиваем их
        if($j == 5 || $j == 6) 
             echo "<td><font color=red>".$week[$i][$j]."</font></td>";
        else echo "<td>".$week[$i][$j]."</td>";
      }
      else echo "<td>&nbsp;</td>";
    }
    echo "</tr>";
  } 
  echo "</table>";
?>
