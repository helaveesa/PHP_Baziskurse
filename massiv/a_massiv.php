<!DOCTYPE html> 
<html>
 <head>
   <title>работа с ассоциативным массивом</title>
  <meta charset="utf-8">
  </head>
 <body>
 	<?php
    $mas1 = array ("Yamaha", "Ducati", "HD", "Suzuki", "Aprilliya", "Lifan", "Kawasaki", "Indian", "Triumph"); //создание массива
    // выведем на печать наш массив
    echo "$mas1[0], $mas1[1], $mas1[2], $mas1[3], $mas1[4], $mas1[5], $mas1[6], $mas1[7], $mas1[8]";
    
    // ассоциация по ключу
    $moto = array ("brend" => "<b>Yamaha</b>",
                    "kub" => "600",
                    "type" => "turer");
    //echo "<br>$moto[brend]";
    echo "<br><br>Одна из самых известных марок мотоцикла - $moto[brend];
    <br>Кубатура таких мотоциклов различна, но наиболее оптимальная - $moto[kub];
    <br>На таком мотоцикле можно ездить как по городу, так и по загородным трассам (автобанам) - $moto[type];";
    $moto = array ("brend" => "<b>Ducati</b>",
                    "kub" => "1200",
                    "type" => "sport");
    echo "<br><br>Одна из самых известных статусных марок мотоцикла - $moto[brend];
    <br>Кубатура таких мотоциклов - $moto[kub];
    <br>На таком мотоцикле можно ездить как по городу, так и по загородным трассам (автобанам). 
    <br>Визитная карточка такого мотоцикла - красная 'птичья клетка', которая защищает двигатель - $moto[type];";
        
    //нумерация ключей и значений
    $key = array_keys ($moto);  #создание нумерованного массива ключей
    foreach($key as $per) {
    echo "<br><br>$per";
    }                           # печать нумерованного массива ключей
    $value = array_values ($moto);  # создание нумерованного массива значений
    foreach($value as $per) {
    echo "<br><br>$per";
    }                           # печать нумерованного массива значений
    list ($k, $v) = each ($moto); 
    /*возвратим пару - ключ-значение, через создание списка,
    список - list; $k-значение ключа; $v-значение переменной*/
    
    // просмотр всего массива, через цикл While
    while (list ($k, $v) = each ($moto)) {
    echo "<br><br>$k ===> $v <br>";
    }    
    ?>
 </body> 
</html>