<!DOCTYPE html> 
<html>
 <head>
   <title>Корзина кол-во 20 и более</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	$kol = 20;
	$ost = $kol%10;             //оператор возвращает целочисленный остаток от деления или Деление по модулю
	switch ($ost)              // Оператор switch подобен серии операторов IF с одинаковым условием; конструкция swich/case использует неточные сравнения (==) 
	{case 1: $word = "товар"; break; 
	 case 2: $word = "товарa"; break;
	 case 3: $word = "товарa"; break;
	 case 4: $word = "товарa"; break;
	 case 5: $word = "товаров"; break;
     case 6: $word = "товаров"; break;
	 default: $word = "товаров";
	}
	echo "$kol $word";
?>
  </body> 
</html>
