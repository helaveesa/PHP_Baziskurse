<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Функции даты и времени смена часовых поясов</title>
</head>

<?php

echo 'Текущий часовой пояс:  ';
echo date_default_timezone_get(); // не требует ввода параметров
// вернет имя текущего часового пояса, кот. будет выведено в браузер при помощи echo
echo '<br><br>';

// сменим пояс на тот, что у нас
/* это делается с помощью функции, которой нужно передать параметр: имя часового пояса это имя берется из мана - функции даты и времени далее список поддерживаемых часовых поясов выбираем нужный континент - Европа - Москва */

// рассмотрим эту функцию

date_default_timezone_set('Europe/Moscow'); // set - установить

echo 'Новый часовой пояс:  ';
echo date_default_timezone_get(); 
echo '<br><br>';


// формирование дат и времени и отображение их в удобном формате

echo 'Текущая дата:  ';
echo date('d.m.Y H:i:s'); // имеет много параметров
echo '<br><br>';


?>

<body>
</body>
</html>