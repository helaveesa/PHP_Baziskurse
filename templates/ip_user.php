<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Как определить IP-посетителя</title>
 </head> 
 <body>  
<?php
echo getenv('REMOTE_ADDR'); # Узнать IP адрес пользователя можно с помощью функции getenv('REMOTE_ADDR')
?>
 </body>
</html>