<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<?php
// пример 1
$c = 10;
$d = 20;
$e = 30;

if ($c == 10) {
	echo 'Строка 1<br>';
	echo 'Строка 2<br>';
} else {
	echo 'Строка 3<br>';
	echo 'Строка 4<br>';
}
echo '<br>';
// пример 2
if ($c == 12) {
	echo 'Строка 1<br>';
	echo 'Строка 2<br>';
} else {
	echo 'Строка 3<br>';
	echo 'Строка 4<br>';
}
// пример 2.2
if ($c != 10) {
	echo 'Строка 1<br>';
	echo 'Строка 2<br>';
} else {
	echo 'Строка 3<br>';
	echo 'Строка 4<br>';
}

echo '<br>';
// вложенное условие пример 1
if ($c != 10) {
	if ($d == 20) echo '$d == 20' . '<br>';
	echo 'Строка 1<br>';
	echo 'Строка 2<br>';
} else {
	if ($e == 30) echo '$e == 30' . '<br>'; // это будет выведено на печать
	echo 'Строка 3<br>'; // это будет выведено на печать
	echo 'Строка 4<br>'; // это будет выведено на печать
}
// вложенное условие пример 2
if ($c == 10) {
	if ($d == 20) echo '$d == 20' . '<br>'; // это будет выведено на печать
	echo 'Строка 1<br>'; // это будет выведено на печать
	echo 'Строка 2<br>'; // это будет выведено на печать
} else {
	if ($e == 30) echo '$e == 30' . '<br>';
	echo 'Строка 3<br>';
	echo 'Строка 4<br>';
}

echo '<br>';
// true or false
// true
if (true) echo 'Yes!' . '<br>';
else echo 'No!<br>';

// false
if (false) echo 'Yes!' . '<br>';
else echo 'No!<br>';
?>
</body>
</html>