<!DOCTYPE html> 
<html>
 <head>
   <title>q2</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "3.php"><br>
 <p>вопрос 2 <br />
 <input type = "radio" name = "v2" value="Отв1">bla-bla<br>
 <input type = "radio" name = "v2" value="Отв2">bla-blabla-bla<br>
 <input type = "radio" name = "v2" value="Отв3">bla<br>
 <input type = "radio" name = "v2" value="Отв4">bla-blabla-blabla-bla<br>
 
 <input type = "submit" name = "s1" value = "Далее"><br>
 <input type = "hidden" name = "name1" value = "<?php echo $_GET[name1];?>">
 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
  </body> 
</html>