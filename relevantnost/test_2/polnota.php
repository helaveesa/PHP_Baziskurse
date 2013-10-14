<!DOCTYPE html> 
<html>
 <head>
   <title>q3</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "file:///D|/Documents/GitHub/PHP_Baziskurse/relevantnost/test_2/origin.php"><br>
 <h3>Дайте оценку по полноте освещаемой информации источниками СМИ:</h3><br />
 <input type = "radio" name = "v3" value="3">Информация полна<br>
 <input type = "radio" name = "v3" value="2">Информация содержить основные данные<br>
 <input type = "radio" name = "v3" value="1">Информация содержить лишь некоторые данные<br>
 <br />
 <input type = "submit" name = "s1" value = "Далее"><br>
 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
 <input type = "hidden" name = "v2" value = "<?php echo $_GET[v2];?>">
 </form>
  </body> 
</html>