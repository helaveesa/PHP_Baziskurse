<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Вычисляем время выполения php-скрипта (загрузки страницы)</title>
 </head> 
 <body>  
<?php
define('ST_T', microtime());//начало

echo '<p>Контент страницы, скрипты и т.п.</p>';

printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец
?>
 </body>
</html>