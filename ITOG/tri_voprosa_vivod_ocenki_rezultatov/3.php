<!DOCTYPE html> 
<html>
 <head>
   <title>q3</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "finish.php"><br>
 <h3>Третий вопрос: что бы Вы предпочли?</h3><br />
 <input type = "radio" name = "v3" value="отв1">Харлей<br>
 <input type = "radio" name = "v3" value="отв2">Ямаху<br>
 <input type = "radio" name = "v3" value="отв3">Яву<br>
 <input type = "radio" name = "v3" value="отв4">Днепр<br>
<br />
 <input type = "submit" name = "s1" value = "Далее"><br>

 <input type = "hidden" name = "name1" value = "<?php echo $_GET[name1];?>">
 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
 <input type = "hidden" name = "v2" value = "<?php echo $_GET[v2];?>">
 </form>
  </body> 
</html>