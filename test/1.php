<!DOCTYPE html> 
<html>
 <head>
   <title>q1</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "2.php"><br>
 <h3>Оцените оперативность источников СМИ:</h3> <br />
 <input type = "radio" name = "v1" value="Санкт-Петербург">Санкт-Петербург<br />
 <input type = "radio" name = "v1" value="Москва">Москва<br />
 <input type = "radio" name = "v1" value="Краснодар">Краснодар<br />
 <input type = "radio" name = "v1" value="Иркутск">Иркутск<br />
 <br />
 <input type = "submit" name = "s1" value = "Далее"><br>
 <input type = "hidden" name = "name1" value = "<?php echo $_GET[name1];?>">
 </form>
  </body> 
</html>