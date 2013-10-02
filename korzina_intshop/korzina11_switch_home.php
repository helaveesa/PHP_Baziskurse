<!DOCTYPE html> 
<html>
 <head>
   <title>Корзина кол-во 11</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
	$kol = 1;
	$ost = $kol%10;             //оператор возвращает целочисленный остаток от деления или Деление по модулю
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
    if ($kol >= 10 && $kol < 21) {
    echo "товаров";
    } elseif ($kol == 21) {
    echo "товар";
    }
    if ($kol >= 22 && $kol < 25) {
    echo "товара";
    } elseif ($kol >= 25 && $kol < 30){
    echo "товаров";
    }
    // и так далее    
	echo "$kol $word";
?>
  </body> 
</html>

<!-- http://www.puzzleweb.ru/php/17_if_else.php -->