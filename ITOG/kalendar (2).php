<!DOCTYPE html> 
<html>
 <head>
   <title>Календарь</title>
  <meta charset="utf-8">
    <style type="text/css">
   TABLE {
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
    width: 300px; /* Ширина таблицы */
   }
   TH { 
    background: #fc0; /* Цвет фона ячейки */
    text-align: left; /* Выравнивание по левому краю */
   }
   TD {
    background: #fff; /* Цвет фона ячеек */
    text-align: center; /* Выравнивание по центру */
   }
   TH, TD {
    border: 1px solid black; /* Параметры рамки */
    padding: 4px; /* Поля вокруг текста */
   }
   </style>
 </head> 
 <body>
  <table>
   <tr>
   <td><?php echo $month; ?></td>
   </tr>
   
   <tr>
   <th>Понедельник</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   
   <tr>
   <th>Вторник</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   
   
   <tr>
   <th>Среда</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   
   
   <tr>
   <th>Четверг</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   
   
   <tr>
   <th>Пятница</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   
   
   <tr>
   <th>Суббота</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   
   
   <tr>
   <th>Воскресенье</th>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>
   <td><?php echo $day_count; ?></td>   
   </tr>
   <td><?php echo $dayofmonth; ?></td>
  </table>
 </body>
</html>
 	<?php
	// введем переменную для месяца
	$month = "";
		
	 // Вычисляем число дней в текущем месяце
	 $dayofmonth = date('t');
  
	  // Счётчик для дней месяца
	  $day_count = 1;
  
  // массив week
  $week = array ("ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ", "ВС"); # 7 элементов массива
  foreach ($mas as $per) {
  echo "$per";
  }
  
  // Выводим содержимое массива $week,  в виде календаря  выводим таблицу  
		echo "<table>";  
		for($j = 0; $j < 7; $j++)  {    
		echo "<tr>";
		
		for($i = 0; $i < count($week); $i++)    {    # count — Подсчитывает количество элементов массива   
		if(!empty($week[$i][$j]))    {    # empty - определяет, установлена ли переменная. 
		
		if($j == 5 || $j == 6)       # || - или       
		echo "<td><font color = # ffffff>".$week[$i][$j]."</font></td>";  
		# если имеем дело с субботой и воскресеньем, то выделяем их красным цветом       
		
		else echo "<td>".$week[$i][$j]."</td>";      }      

		else echo "<td>&nbsp;</td>";  # &nbsp - неразделимый пробел    
		}    
		echo "</tr>";  
		}   
		echo "</table>";
?>
 </body> 
</html>

<!-- http://php.net/manual/ru/book.calendar.php -->