<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Получение контента с помощью функции</title>
</head>

<?php

/* функция позволяет получать содержимое страницы, с любых веб-сайтов */
// получать содержимое локальных файлов (на сервере)
// так же с помощью данной функции можно указать адрес страницы в интернете и получить ее содержимое
// при работе с данной функцией должны совпадать кодироваки кода (тут) и запрашиваемой страницы в интернете

// создадим отдельный текстовый файл, кодировка utf-8

// попробуем считать содержиоме файла text.txt
$a = file_get_contents('text.txt'); // путь не указываем т.к. в одной папке
echo '<pre>';
echo $a;
echo '</pre>';

// загрузка стороннего содержимого с других страниц в интернете

$b = file_get_contents ('http://www.puzzleweb.ru/');

echo $b;
?>
<body>
</body>
</html>