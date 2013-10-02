<!DOCTYPE html> 
<html>
 <head>
   <title>q1</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "2.php"><br>
 <p>Столица РФ? <br />
 <input type = "radio" name = "v1" value="Санкт-Петербург"><p>Санкт-Петербург</p><br>
 <input type = "radio" name = "v1" value="Москва"><p>Москва</p><br>
 <input type = "radio" name = "v1" value="Краснодар"><p>Краснодар</p><br>
 <input type = "radio" name = "v1" value="Иркутск"><p>Иркутск</p><br>

 <input type = "submit" name = "s1" value = "Далее"><br>
 <input type = "hidden" name = "name1" value = "<?php echo $_GET[name1];?>">
  </body> 
</html>