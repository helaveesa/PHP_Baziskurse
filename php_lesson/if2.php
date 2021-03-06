﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>if - условные конструкции</title>
</head>

<body>
<?php
$a = 10;
$b = 15;
// пример 1
if($a < $b) 
echo 'переменная а меньше переменной b' . '<br>';	

// пример 2
if($a == $b) 
echo 'переменная а равна переменной b' . '<br>';

// пример 3
if($a == $b) 
echo 'переменная а равна переменной b' . '<br>';
else echo '$a != $b' . '<br>';

// пример 4
echo '<br>';
$c = 10;
$d = 20;
$e = 30;

if ($c == 1) echo '$c == 1' . '<br>';
elseif ($d == 2) echo '$d == 2' . '<br>';
elseif ($e == 3) echo '$e == 3' . '<br>';
else echo 'Условия не выполнились!</br>';


echo '<br>';
// проверка на эквивалентность 1 == и ===
// ==
$a = 1; // числовой формат (тип) содержимое одинаковое, а тип - разный
$b = '1'; // текстовый формат (тип)

if ($a == $b) '$a == $b' . '<br>';
else echo '$a != $b' . '<br>';

// ===
if ($a === $b) '$a === $b' . '<br>';
else echo '$a !== $b' . '<br>';

// пример проверки на эквивалентность 2 == и ===
$a = 1; // числовой формат 
$b = 1; // аналогично

// ==
if ($a == $b) '$a == $b' . '<br>';
else echo '$a != $b' . '<br>';

// ===
if ($a === $b) '$a === $b' . '<br>';
else echo '$a !== $b' . '<br>';

// пример проверки на эквивалентность 3 == и ===
$a = '1'; // текстовый формат (тип) 
$b = '1'; // текстовый формат (тип)

// ==
if ($a == $b) '$a == $b' . '<br>';
else echo '$a != $b' . '<br>';

// ===
if ($a === $b) '$a === $b' . '<br>';
else echo '$a !== $b' . '<br>';


echo '<br>';
// двойное условие
// пример 1
if ($c == 1 && $d == 2)
echo 'Двойное условие выполнилось!<br>';
else echo 'Двойное условие не выполнилось!<br>'; // это будет выведено на печать

echo '<br>';
// пример 2
if ($c == 10 && $d == 20)
echo 'Двойное условие выполнилось!<br>'; // это будет выведено на печать
else echo 'Двойное условие не выполнилось!<br>';

// пример 3
if ($c == 10 && $d == 22)
echo 'Двойное условие выполнилось!<br>'; 
else echo 'Двойное условие не выполнилось!<br>'; // это будет выведено на печать, 
/* так как оператор && (И) требует, чтобы оба выражения были правдой, а у нас одно - ложь - следовательно все выражение будет ложь */

echo '<br>';
// ИЛИ
// пример 1
if ($c == 12 || $d == 20)
echo 'Двойное условие выполнилось!<br>'; // это будет выведено на печать
else echo 'Двойное условие не выполнилось!<br>'; 
/* так как оператор || (ИЛИ) требует, чтобы хотя бы одно выражение было верным, тогда и все выражение будет истиным */

// пример 2
if ($c == 12 || $d == 22)
echo 'Двойное условие выполнилось!<br>'; 
else echo 'Двойное условие не выполнилось!<br>'; // это будет выведено на печать


echo '<br>';
// ! Отрицание или Инверсия
// пример 1: позволяет правду заменить на ложь
if (!($c == 10 || $d == 20))
echo 'Двойное условие выполнилось!<br>'; 
else echo 'Двойное условие не выполнилось!<br>'; // это будет выведено на печать

// пример 2: позволяет ложь заменить на правду
if (!($c == 12 || $d == 22))
echo 'Двойное условие выполнилось!<br>'; // это будет выведено на печать
else echo 'Двойное условие не выполнилось!<br>'; 






// вывод строки	
echo "<br>Данный текст находится за блоком условий</br>";
?>
</body>
</html>