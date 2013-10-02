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
   <tr><th>Понедельник</th><td>Ячейка 1</td><td>Ячейка 2</td></tr>
   <tr><th>Вторник</th><td>Ячейка 3</td><td>Ячейка 4</td></tr>
  </table>
 </body>
</html>
 	<?php
    $num = cal_days_in_month(CAL_GREGORIAN, 10, 2012); 
    echo "Всего $num день в Октябре 2012 года";
	?>
 </body> 
</html>

<!-- http://php.net/manual/ru/book.calendar.php -->