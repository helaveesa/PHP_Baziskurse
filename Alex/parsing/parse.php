<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Парсинг источников</title>
</head>

<body>
<?php
    include("simple_html_dom.php"); //необходимо подключать данный файл к коду
        $file="http://www.fontanka.ru/"; // переменная, в которую записывается ссылка на сайт, который мы проводим парсинг
        $dom = file_get_html($file); 
        /*file_get_contents — Читает содержимое файла в строку; возвращает содержимое файла в строке, начиная с указанного смещения offset и до maxlen байт. В случае неудачи, file_get_contents() вернёт FALSE */
        $a=$dom->find('#mainnews'); // $dom обращается к mainnews; #- знак решетки говорит о том, что id в php заменяется на решетку http://www.w3schools.com/cssref/css_selectors.asp
        foreach($a as $b)  // cikl for vivoda massiva na ekran
    echo $b->getElementByTagName('img');  // vivod img (iskomyi file) na ekran
?>
</body>
</html>