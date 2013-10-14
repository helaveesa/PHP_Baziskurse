<!DOCTYPE html> 
<html>
 <head>
   <title>q3</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "file:///D|/Documents/GitHub/PHP_Baziskurse/relevantnost/test_2/finish.php"><br>
 <h3>Оригинальность информации источников СМИ:</h3><br />
 <input type = "radio" name = "v4" value="3">Информация оригинальна<br>
 <input type = "radio" name = "v4" value="2">Информация является компиляцией<br>
 <input type = "radio" name = "v4" value="1">Информация неоригинальна<br>
<br />
 <input type = "submit" name = "s1" value = "Подсчет итога"><br>

 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
 <input type = "hidden" name = "v2" value = "<?php echo $_GET[v2];?>">
 <input type = "hidden" name = "v2" value = "<?php echo $_GET[v3];?>">
 </form>
  </body> 
</html>