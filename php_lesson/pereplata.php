<!DOCTYPE html> 
<html>
 <head>
   <title>Вывод переплата и платеж</title>
  <meta charset="utf-8">
  </head>
 <body>
 	<?php
    // введем переменные
    $sum = 500000; // переменная суммы в рублях
    $srok = 12; // срок выплаты
    $proc = 15; //процент от 500000
    
    // надо выяснить какова переплата по платежу и сумму платежа, формулы для поиска этих двух величин
    
    // формула для переплаты, переплата = сумму *%/100
    // формула для платежа, платеж = сумма + переплата/ срок
    
    // введем переменные для переплаты и платежа
    $per = $sum*15/100;
    $platej = ($sum+$per)/ $srok;
    
    // округлим значение переменной platej
    $num = ceil ($platej);
    // добавим переменные, которые выведут время и дату (день, месяц, год, час, минуты, секунды)
    $tp = time ();
    $d = date ("d/ m/ Y/ h/i/ s");
    
    $word1 = "Переплата";
    $word2 = "Платеж";
    
    echo "$word1: $per <br> $word2: $num <br> $tp <br> $d";
	?>
 </body> 
</html>