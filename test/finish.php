<!DOCTYPE html> 
<html>
 <head>
   <title>Test</title>
  <meta charset="utf-8">
  </head>
 <body>
 Уважаемый, <br>
 <?php echo $_GET[name1];?><br>
 Результат:<br>
 
 <?php
 $v = 0;
 $nv = 0;
 // условия для все правильных ответов на три вопроса
 if ($_GET[v1]==1)
 $v++;
 else $nv++;
 if ($_GET[v2]==3)
 $v++;
 else $nv++;
 if ($_GET[v3]==1)
 $v++;
 else $nv++;
 
echo "$v правильных ответов <br> $nv неверных ответов";
?>

Ваша оценка:<br>

  </body> 
</html>