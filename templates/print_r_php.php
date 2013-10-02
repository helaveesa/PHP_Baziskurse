<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Список файлов из папки</title>
 </head> 
 <body>  
<?php
$files_arr = scandir('14');
//выведем содержимое массива на экран
echo '<pre>';
print_r($files_arr);
echo '</pre>';
?>

/* С помощью php можно просканировать папку 
с файлами и вывести результат на экран, 
пригодится при создании всевозможных файловых хранилищ.*/
 </body>
</html>