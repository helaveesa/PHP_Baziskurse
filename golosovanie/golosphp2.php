<?php
	
		if (isset ($_COOKIE[golos])) 
		{	 
			 //вывод результатов 
			 $f1 = fopen ("golos.txt", "r");  # открыть файл для чтения
			 $str = fread ($f1, filesize ("golos.txt"));  # прочитать файл
			 fclose ($f1);  # закрыть 
			 $mas = explode (":", $str); # разбить строку на массив
			 // внесем перемнную ноль
			 $maх = 0;  # поиск max элемента в массиве $mas
			 /*сравним каждый элемент массива с нулем
			 что бы пройтись по всем элементам массива, нужен цикл foreach*/
		 
			 foreach  ($mas as $per) {
			 if ($per > $maх) $maх = $per;      # если элемент массива больше, чем текущий максимум (т.е. $per) мы его присваиваем максимум
			}
		 
			foreach ($mas as $per) {           # цикл создания массива ширин в % отношении к максимум, подсчет ширин
			// вводим новый массив $wdt ширина
			$wdt[] = $per*100/$max;
			}
				
			echo "$wdt";
			echo "<table width=100% border=2 cellspacing=1 cellpadding=4> # ширина, толщина рамки в px, расстояние между яч., отступ от рамки до содержимого яч.
					<tr align=center bgcolor=#999999>
						<td> Отличный мот</td>
						<td width = 500 ><div style = 'width: $wdt[0]%;'></div></td>
						<td>$mas[0] </td>
					</tr>
					<tr align=center bgcolor=#999999>
						<td> Хороший аппарат</td>
						<td width = 500 ><div style = 'width: $wdt[1]%;'></div></td>
						<td>$mas[1] </td>
					</tr>
					<tr align=center bgcolor=#999999>
						<td> Норма</td>
						<td width = 500 ><div style = 'width: $wdt[2]%;'></div></td>
						<td>$mas[2] </td>
					</tr>
					<tr align=center bgcolor=#999999>
						<td> Троечку поставлю</td>
						<td width = 500 ><div style = 'width: $wdt[3]%;'></div></td>
						<td>$mas[3] </td>
					</tr>
					<tr align=center bgcolor=#999999>
						<td> Не вариант</td>
						<td width = 500 ><div style = 'width: $wdt[4]%;'></div></td>
						<td>$mas[4] </td>
					</tr>
			</table>";
		} 
				else {
						 if (isset($_GET[s1])) { # если была нажата кнопка
						 $f1 = fopen ("golos.txt", "r"); #открыть файл для чтения
						 $str = fread ($f1, filesize ("golos.txt"));  # чтение файла целиков в байтах
						 fclose ($f1);   # закрыть файл
						 
						 $mas = explode (":", $str);  # разбить строку по элементу : в массив
						 $golos = $_GET[golos];  
						 $mas[$golos]++;  
						 
						 echo $str = implode (":", $mas);   # собрать массив в строку
						 $f1 = fopen ("golos.txt", "w");  # открыть файл для перезаписи 
						 fwrite ($f1,$str);  # запись строки в файл
						 fclose ($f1);   # закрыть файл
						 setcookie("golos","ok");
						 header ("location: golosphp.php");
						}
												
					else {
?>
						 <!-- форма оценки-->
						 <form method = "get">  
						 <p><h3>Оцените мотоцикл:</h3> <br /></p>
						 <img src="golosovanie/moto.jpg" alt="Мотоцикл красного цвета " width="100" height="80" /><br> 
						 <!-- src-указывает на источник изображения; alt-альтернативный текст; ширина в px; высота в px -->
						 
						 <input type = "radio" name = "golos" value="0"><p>Отличный мот</p><br>
						 <input type = "radio" name = "golos" value="1"><p>Хороший аппарат</p><br>
						 <input type = "radio" name = "golos" value="2"><p>Норма</p><br>
						 <input type = "radio" name = "golos" value="3"><p>Троечку поставлю</p><br>
						 <input type = "radio" name = "golos" value="4"><p>Не вариант</p><br>
						 <p><input type = "submit" name = "s1" value = "start">Оценить<br></p>  <!--кнопка -->
						 </form>
<?php
						}	
                    }		
?>