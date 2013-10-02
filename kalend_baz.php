<!DOCTYPE html> 
<html> 
<head>   
<title>Календарь</title>  
<meta charset="utf-8">  
</head> 
<body>
	<?php  
		// введем переменную для месяца
		$month = "";
		// создади массив 		
		$week = array ("ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ", "ВС"); 
		# 7 элементов массива  
		foreach ($mas as $per) {  
		echo "$per";  } 
		
		// Выводим содержимое массива $week,  в виде календаря  выводим таблицу  
		echo "<table border = 1 width = 100>";  
		for($j = 0; $j < 7; $j++)  {    
		echo "<tr>";
		
		for($i = 0; $i < count($week); $i++)    {    # count — Подсчитывает количество элементов массива   
		if(!empty($week[$i][$j]))    {    # empty - определяет, установлена ли переменная. 
		# если имеем дело с субботой и воскресеньем, то выделяем их красным цветом             
		
		if($j == 5 || $j == 6)       # || - или       
		echo "<td><font color = # ffffff>".$week[$i][$j]."</font></td>";        
		
		else echo "<td>".$week[$i][$j]."</td>";      }      

		else echo "<td>&nbsp;</td>";  # &nbsp - неразделимый пробел    
		}    
		echo "</tr>";  
		}   
		echo "</table>";
	?>
</body> 
</html>