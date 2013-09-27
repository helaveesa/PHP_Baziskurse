<!DOCTYPE html> 
<html>
 <head>
   <title>Корзина</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	$kol = 1;
	$ost = $kol%10;
	switch ($ost)
	{case 1: $word = "товар"; break;
	 case 2: $word = "товарa"; break;
	 case 3: $word = "товарa"; break;
	 case 4: $word = "товарa"; break;
	 case 5: $word = "товаров"; break;
	 default: $word = "товаров";
	}
	echo "$kol $word";
?>
  </body> 
</html>