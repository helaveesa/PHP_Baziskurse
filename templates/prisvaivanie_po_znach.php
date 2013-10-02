<!DOCTYPE html> 
<html>
 <head>
   <title>Присваивание по значению</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
 
  $foo = 'дерево';     // Присваивает значение 'дерево'
  $bar = $foo;         // Присваивает переменной $bar значение переменной $foo
  $foo = 10;           // Присваивает $foo новое значение
  echo $bar;           // 'дерево': значение $bar не изменилось
 ?>
  </body> 
</html>