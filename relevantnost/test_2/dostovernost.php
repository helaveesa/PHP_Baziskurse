<!DOCTYPE html> 
<html>
 <head>
   <title>q2</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "file:///D|/Documents/GitHub/PHP_Baziskurse/relevantnost/test_2/polnota.php"><br>
 <h3>Дайте оценку достоверности источников СМИ:</h3><br />
 <input type = "radio" name = "v2" value="4">Полностью достоверно<br>
 <input type = "radio" name = "v2" value="3">В основном достоверно<br>
 <input type = "radio" name = "v2" value="1">Частично достоверно<br>
 <br />
 <input type = "submit" name = "s1" value = "Далее"><br>
 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
 </form>
  </body> 
</html>