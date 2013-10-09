<!DOCTYPE html> 
<html>
 <head>
   <title>q2</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "3.php"><br>
 <h3>Второй вопрос: что такое сервер?</h3><br />
 <input type = "radio" name = "v2" value="Отв1">bla-bla<br>
 <input type = "radio" name = "v2" value="Отв2">наименьший логический элемент двумерного цифрового изображения в растровой графике, или [физический] элемент матрицы дисплеев, формирующих изображение<br />
 <input type = "radio" name = "v2" value="Отв3">операция склеивания объектов линейной структуры, обычно строк<br />
 <input type = "radio" name = "v2" value="Отв4">аппаратное обеспечение, выделенное и/или специализированное для выполнения на нём сервисного программного обеспечения<br />
 <br />
 <input type = "submit" name = "s1" value = "Далее"><br>
 <input type = "hidden" name = "name1" value = "<?php echo $_GET[name1];?>">
 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
 </form>
  </body> 
</html>