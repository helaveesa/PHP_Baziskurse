<!-- Инструкции if могут быть бесконечно вложены в другие инструкции if, что даёт большую гибкость в организации условного выполнения различных частей программы.-->
<!DOCTYPE html> 
<html>
 <head>
   <title>Корзина кол-во 11</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
 if ($kol == 1) {
    echo "товар";
    } elseif ($kol == 2) {
    echo "товара";
    } elseif ($kol >= 3) {
    echo "товара";
    } elseif ($kol >= 5) {
    echo "товаров";
    } elseif ($kol == 21) {
    echo "товар";
    } elseif ($kol >= 22) {
    echo "товара";
    } elseif ($kol >= 25) {
    echo "товаров";
    } elseif ($kol == 31) {
    echo "товар";
    } elseif ($kol >= 32) {
    echo "товара";
    } elseif ($kol >= 35) {
    echo "товаров";
    } elseif ($kol == 41) {
    echo "товар";
    }
?>  
  </body> 
</html>
