<!DOCTYPE html> 
<html>
 <head>
   <title>Календарь</title>
  <meta charset="utf-8">
 </head> 
 
 <body>
  <table>
   <tr>
        <th>Понедельник</th>
            <td>Ячейка 1</td>
            </tr>
            <td>Ячейка 2</td>
            </tr>
            <td>Ячейка 3</td>
            </tr>
            <td>Ячейка 4</td>
            </tr>
            <td>Ячейка 5</td>
            </tr>
            <td>Ячейка 6</td>
    </tr>
    <tr>
        <th>Вторник</th>
            <td>Ячейка 1</td>
            </tr>
            <td>Ячейка 2</td>
            </tr>
            <td>Ячейка 3</td>
            </tr>
            <td>Ячейка 4</td>
            </tr>
            <td>Ячейка 5</td>
            </tr>
            <td>Ячейка 6</td>
    </tr>
    <tr>
        <th>Среда</th>
            <td>Ячейка 1</td>
            </tr>
            <td>Ячейка 2</td>
            </tr>
            <td>Ячейка 3</td>
            </tr>
            <td>Ячейка 4</td>
            </tr>
            <td>Ячейка 5</td>
            </tr>
            <td>Ячейка 6</td>
    </tr>
   
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