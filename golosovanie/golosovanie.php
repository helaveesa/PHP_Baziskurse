<!DOCTYPE html> 
<html>
 <head>
   <title>Голосование</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get">  //форма
 <p>Оцените мой мотоцикл: <br />
 <input type = "radio" name = "golos" value="0"><p>Отлично</p><br>
 <input type = "radio" name = "golos" value="1"><p>Хорошо</p><br>
 <input type = "radio" name = "golos" value="2"><p>Норма</p><br>
 <input type = "radio" name = "golos" value="3"><p>Пхоло</p><br>
 <input type = "radio" name = "golos" value="4"><p>Ужасно</p><br>
 
 <p><input type = "submit" name = "s1" value = "start">Оценить<br></p>
 </form>
 // обработчик формы
 <?php
 if (isset($_GET[s1]))
 {
 $f1 = fopen ("golos.txt", "r");
 $str = fread ($f1, filesize ("golos.txt"));
 fclose ($f1);
 
 $mas = explode (":", $str);
 $golos = $_GET[golos];
 $mas[$golos]++;
 
 echo $str = implode (":", $mas);
 $f1 = fopen ("golos.txt", "w");
 fwrite ($f1,$str);
 fclose ($f1);  
 }
 ?>
 //вывод результатов
 <?php
 $f1 = fopen ("golos.txt", "r");
 $str = fread ($f1, filesize ("golos.txt"));
 fclose ($f1);
 
 $mas = explode (":", $str); //разбить строку на массив
 // внесем перемнную ноль
 $maх = 0;
 // сравним каждый элемент массива с нулем
 // что бы пройтись по всем элементам массива, нужен цикл foreach
 foreach  ($mas as $per) {
 if ($per > $maх) $maх = $per; // если элемент массива больше, чем текущий максимум (т.е. $per) мы его присваиваем максимум
 }
 foreach ($mas as $per) { //цикл создания массива ширин в % отношении к максимум
 // вводим новый массив $wdt
 $wdt[] = $per*100/$max
 }
 echo "table"
 
 
 
 
 ?>
  </body> 
</html>