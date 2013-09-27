<!DOCTYPE html> 
<html>
 <head>
   <title>Корзина кол-во 22</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	$kol = 22;
	$ost = $kol%10;             //оператор возвращает целочисленный остаток от деления или Деление по модулю
    if ($kol > 20) {
    $ost = $kol%10;
    else $ost = $kol;
    }
	switch ($ost) {        
	case 1: $word = "товар"; 
        break; 
	 case 2: $word = "товарa"; 
        break;
	 case 3: $word = "товарa"; 
        break;
	 case 4: $word = "товарa"; 
        break;
	 case 5: $word = "товаров"; 
        break;
     case 6: $word = "товаров"; 
        break;
	 default: $word = "товаров";
	} 
	echo "$kol $word";
?>
  </body> 
</html>

<!-- http://www.puzzleweb.ru/php/17_if_else.php -->