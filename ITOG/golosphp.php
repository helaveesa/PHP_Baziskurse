<!DOCTYPE html> 
<html>
 <head>
   <title>Голосование</title>
  <meta charset="utf-8">
  </head>
 <body>
 
 
 
 <!-- форма оценки-->
 <form method = "get">  
 <h2>Дайте, пожалуйста оценку мотоциклу <br /></h2>
 <a href="moto1.jpg"><img src="moto1.jpg" alt="Мотоцикл красного цвета" width="375" height="320" /></a> 
 <!-- src-указывает на источник изображения; alt-альтернативный текст; ширина в px; высота в px -->
 
 <p>Отличный мот<input type = "radio" name = "golos" value="0"></p> 
 <!-- value - сопоставленно с ключами в массиве --> 
 <p>Хороший аппарат<input type = "radio" name = "golos" value="1"></p>
 <p>Норма<input type = "radio" name = "golos" value="2"></p>
 <p>Троечку поставлю<input type = "radio" name = "golos" value="3"></p>
 <p>Не вариант<input type = "radio" name = "golos" value="4"></p>
 <p><input type = "submit" name = "s1" value = "Оценить"><br></p>  
 <!--кнопка -->
 </form>
 
 
 
 <!-- Обработчик формы оценки мотоцикла-->
 <?php
 if (isset($_GET[s1]))
 {
 $f1 = fopen ("golos.txt", "r"); #открыть файл для чтения
 $str = fread ($f1, filesize ("golos.txt"));  # чтение файла целиков в байтах
 fclose ($f1);   # закрыть файл
 
 $mas = explode (":", $str);  # разбить строку по элементу : в массив
 $golos = $_GET[golos];  
 $mas[$golos]++;  
 
 echo $str = implode (":::", $mas);   # собрать массив в строку
 $f1 = fopen ("golos.txt", "w");  # открыть файл для перезаписи 
 fwrite ($f1,$str);  # запись строки в файл
 fclose ($f1);   # закрыть файл
 }
 ?>
 
 
 
 <!-- вывод результатов -->
 <?php
 $f1 = fopen ("golos.txt", "r");  # открыть файл для чтения
 $str = fread ($f1, filesize ("golos.txt"));  # прочитать файл
 fclose ($f1);  # закрыть 
 
 $mas = explode (":::", $str); # разбить строку на массив
 // внесем перемнную ноль
 $maх = 0;  # поиск max элемента в массиве $mas
 /*сравним каждый элемент массива с нулем
 что бы пройтись по всем элементам массива, нужен цикл foreach*/
 foreach  ($mas as $per) {          # рассмотрим каждый элемент массива, как переменные
 if ($per > $maх) $maх = $per;      # если элемент массива больше, чем текущий максимум (т.е. $per) мы его присваиваем максимум
 }
 foreach ($mas as $per) {           # цикл создания массива ширин в % отношении к максимум, подсчет ширин
 // вводим новый массив $wdt ширина
    $wdt[] = $per*100/$max;
    echo "$wdt";
    echo <table width=100% border=2 cellspacing=1 cellpadding=4> 
	# ширина, толщина рамки в px, расстояние между яч., отступ от рамки до содержимого яч.
    
            //<tr align="center" bgcolor='#0033CC'>       # align -выравнивание по центру; bgcolor - фон цвета ячейки
                <td> Отличный мот</td>                  # тег <td> - для создания одной ячейки таблицы
                <td width =500><div style = "width: $wdt[0]%;"></div></td>    
				# width ="500"- ширина ячеки в px; "width: $wdt[0]%;"- ширина div в %
                <td>$mas[0] </td>
            </tr>
            //<tr align="center" bgcolor='#00A055'>
                <td> Хороший аппарат</td>
                <td width =500 ><div style = "width: $wdt[1]%;"></div></td>
                <td>$mas[1] </td>
            </tr>
            //<tr align="center" bgcolor='#00A055'>
                <td> Норма</td>
                <td width =500 ><div style = "width: $wdt[2]%;"></div></td>
                <td>$mas[2] </td>
            </tr>
            //<tr align="center" bgcolor='#00A055'>
			<td> Троечку поставлю</td>
                <td width =500 ><div style = "width: $wdt[3]%;"></div></td>
                <td>$mas[3] </td>
            </tr>
            //<tr align="center" bgcolor='#00CC66'>
                <td> Не вариант</td>
                <td width =500 ><div style = "width: $wdt[4]%;"></div></td>
                <td>$mas[4] </td>
            </tr>
        </table> 
    }
 ?>
  </body> 
</html>