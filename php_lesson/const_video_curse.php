﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Константы</title>
</head>

<body>
<!-- константы - ячейки памяти для хранения данных, числа, строки, данные логических типов. имеют имя, по имени можно получить значение, но только один раз, это значение не может измениться

интерпретатор php выдаст ошибку при попытке присваивания константе нового значения

можно изменить значение константы только вручную, то есть открыв php файл и заменив значение константы
отредактировать и сохранить

в константах обычно хранят настроечные данные: пароль к БД, кол-во статей которые нужно выводить на странице, 
то есть по сути в константу записываются настроечные данные

имеет смысл создать настроечный php файл 
отдельный файл с константами и подключать его в нужные файлы в нужное время -->

<?php
// создаются константы при помощи функции define и имена констант нужно задавать заглавными буквами

define ('PI', 3.14);
$a = 2;
$b = $a * PI + 3;

echo "Значение PI = " . PI . '<br>'; // Значение PI - вместо PI НЕ подставится значение 3.14

echo "Значение $b = " . $b . '<br>'; // Значение $b - вместо $b подставится то, что будет посчитано и записано в $b

// переназначение константы НЕ возможно!!!

define ('PI', 5); // значение все равно будет 3.14

echo "Значение PI = " . PI . '<br>';
?>
</body>
</html>