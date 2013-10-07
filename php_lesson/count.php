<!DOCTYPE html> 
<html>
 <head>
   <title>Счетчик</title>
  <meta charset="utf-8">
  </head>
 <body>
 <?php
 $f1 = fopen ("1.txt", "r");
 $str = fread ($f1, filesize ("1.txt"));
 fclose ($f1);
 $str++;
 echo $str;
 $f1 = fopen ("1.txt", "w");
 fwrite ($f1,$str);
 fclose ($f1); 
 ?>
  </body> 
</html>