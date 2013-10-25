<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Индексные массивы array-i</title>
</head>

<body>
<?php
// массивы: - индексные - многомерные - ассоциативные
// индексные массивы [0] [1] [2] и т.д.
// ассоциативные массивы [name] [surname] [photos] и т.д.


// рассмотрим индексные массивы [0] [1] [2] и т.д.
// поэлементный способ создания массивов то есть одна ячейка, в которую помещается одно значение

$lang[] = 'HTML';
$lang[] = 'CSS';
$lang[] = 'LISP';
# присвоение индексов автоматически, начиная снуля

$lang[] = 'HTML';
$lang[] = 'CSS';
$lang[] = 'LISP';

echo '<br><br>';
// поэлементный вывод массива
echo $lang[0] . '<br>'; 
echo $lang[1] . '<br>'; 
echo $lang[2] . '<br>'; 

echo '<br><br>';
// вывод всего массива сразу, с помощью функции print_r

print_r ($lang); // функция print_r и в скобках имя массива
// форматирование 

echo '<pre>';
print_r ($lang);
echo '</pre>';

/*
благодаря использованию тега <pre>
мы получим вот что:

Array 
(
	[0] = > HTML
	[1] = > CSS
	[2] = > LISP
)
*/

echo '<br><br>';



?>
</body>
</html>
