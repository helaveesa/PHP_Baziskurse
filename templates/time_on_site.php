<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Время на сайте</title>
 </head> 
 <body>  
<?php
echo date('H:i:s d.m.Y');
?>

<!-- Лучше поместить в переменную формат вывода даты -->

<?
$format = 'Y-m-d';
echo date($format);
?>

 </body>
</html>