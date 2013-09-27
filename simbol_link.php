<!DOCTYPE html> 
<html>
 <head>
   <title>Символическая ссылка</title>
  <meta charset="utf-8">
  </head>
 <body>
 <?php
 
  $red = 'красный';
 
  $color = 'red';
   
  echo $$color;        // Выведет значение переменной $red - красный
  $$color = 'черный';  // присвоили переменной $red новое значение
?>
  </body> 
</html>