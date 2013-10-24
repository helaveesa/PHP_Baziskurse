<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
$c = 1;
$d = 2;
$e = 3;

if ($c == 1) echo '$c == 1' . '<br>';
elseif ($d == 2) echo '$d == 2' . '<br>';
elseif ($e == 3) echo '$e == 3' . '<br>';
else echo 'Условия не выполнились!</br>';

// пример 5
$c = 10;
$d = 2;
$e = 3;

if ($c == 1) echo '$c == 1' . '<br>';
elseif ($d == 2) echo '$d == 2' . '<br>';
elseif ($e == 3) echo '$e == 3' . '<br>';
else echo 'Условия не выполнились!</br>';

// пример 6
$c = 10;
$d = 20;
$e = 3;

if ($c == 1) echo '$c == 1' . '<br>';
elseif ($d == 2) echo '$d == 2' . '<br>';
elseif ($e == 3) echo '$e == 3' . '<br>';
else echo 'Условия не выполнились!</br>';

// пример 7
$c = 10;
$d = 20;
$e = 30;

if ($c == 1) echo '$c == 1' . '<br>';
elseif ($d == 2) echo '$d == 2' . '<br>';
elseif ($e == 3) echo '$e == 3' . '<br>';
else echo 'Условия не выполнились!</br>';


// вывод строки	
echo "<br>Данный текст находится за блоком условий</br>";
?>
</body>
</html>