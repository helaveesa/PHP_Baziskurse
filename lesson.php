<!DOCTYPE html> 
<html>
 <head>
   <title>!DOCTYPE</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	$sum = 500000;
	$proc = 15;
	$srok = 12;
	$pereplata = ($sum * $proc) / 100;
	$platezh = round(($sum + $pereplata) / $srok, 2);
	echo "Переплата: $pereplata <strong>руб.</strong><br>
		  Платеж: $platezh <strong>руб.</strong>";
?>
  </body> 
</html>