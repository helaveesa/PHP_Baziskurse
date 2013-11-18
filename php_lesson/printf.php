<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Функция printf</title>
</head>

<?php

// выводит фрагменты текста вперемешку с разлиичными переменными 

printf('Текстовая строка');

// если строки не содержат переменных, то использовать лучше echo

echo '<br><br>';

// создадим переменную целого типа
$int = 1500;

// создадим переменную строкового типа
$str = 'текст';

// дробного типа
$float = 157.3692;

// создадим еще переменную целого типа
$perc = 16; // для вывода процентов

printf('Значения переменных: <br> int = %d ', $int); // определитель типа начинается со знака % и буква d-desimal, указывает, что сюда надо вставить знач. перем. целого типа



?>

<body>
</body>
</html>