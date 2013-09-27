<!DOCTYPE html> 
<html>
 <head>
   <title>ввв</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	while (list ($k, $v) = each ($_SERVER))
	{
	echo "$k _ $v <br>";
	}
?>
  </body> 
</html>