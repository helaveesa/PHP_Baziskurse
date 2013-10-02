<!DOCTYPE html> 
<html>
 <head>
   <title>q3</title>
  <meta charset="utf-8">
  </head>
 <body>
 <form method = "get" action = "finish.php"><br>
 <p>вопрос 3 <br />
 <input type = "radio" name = "v3" value="отв1">харлей<br>
 <input type = "radio" name = "v3" value="отв2">ямаха<br>
 <input type = "radio" name = "v3" value="отв3">ява<br>
 <input type = "radio" name = "v3" value="отв4">минск<br>

 <input type = "submit" name = "s1" value = "Далее"><br>
 
 <input type = "hidden" name = "name1" value = "<?php echo $_GET[name1];?>">
 <input type = "hidden" name = "v1" value = "<?php echo $_GET[v1];?>">
 <input type = "hidden" name = "v2" value = "<?php echo $_GET[v2];?>">
  </body> 
</html>