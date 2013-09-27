<!DOCTYPE html> 
<html>
 <head>
   <title>Приветствие!</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	$hour = date ("H");
	if ($hour < 6)
	{
	echo "Доброй ночи!";
	}
	if ($hour >= 6 and	$hour < 12)
	{
	echo "Доброе утро!";
	}
	if ($hour >= 12 and $hour < 15)
	{
	echo "Добрый день!";
	}
	if ($hour = 16 and $hour <21)
	{
	echo "Добрый вечер!";
	}
?>
  </body> 
</html>