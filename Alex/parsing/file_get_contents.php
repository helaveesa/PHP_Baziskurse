<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Парсинг источников</title>
</head>

<body>
<?php
// Получить и вывести исходный код домашней страницы вебсайта
$homepage = file_get_contents('http://bikeland.ru/our_brands/ktm/');
echo $homepage; 

// Чтение секции файла
// Читаем 14 символов, начиная с 21 символа
$section = file_get_contents('./people.txt', NULL, NULL, 20, 14);
var_dump($section);

// Использование потоковых контекстов
// Создаем поток
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Открываем файл с помощью установленных выше HTTP-заголовков
$file = file_get_contents('http://www.example.com/', false, $context);



?>
</body>
</html>