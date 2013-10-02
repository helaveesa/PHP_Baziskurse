<!DOCTYPE html> 
<html>
 <head>
   <title>Massiv_foreach</title>
  <meta charset="utf-8">
  </head>
 <body>
<ul><?php
	$mas = array("GAZ", "VAZ", "ZAZ", "6");
	foreach ($mas as $per) {
	echo "<li>$per[$mas]</li>";
	}
?>
</ul>
  </body> 
</html>