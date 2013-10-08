<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Парсинг источников обработанных</title>
</head>

<body>
<?php
    include("simple_html_dom.php"); //необходимо подключать данный файл к коду
    //$file="http://industrialconflicts.ru/msg/"; 
    $file="http://industrialconflicts.ru/adm/confmsg/?&_filter=4"; 
 
    $dom = file_get_html($file); 
/*file_get_contents — Читает содержимое файла в строку; 
возвращает содержимое файла в строке, 
начиная с указанного смещения offset и до maxlen байт. 
В случае неудачи, file_get_contents() вернёт FALSE */
    $a=$dom->find('ed-icon ed-view'); // поиск по <div class="ed-icon-cont"><a class="ed-icon ed-view" href="?_a=view&id=1245606&_from=0"></a></div>
    foreach($a as $b)  
    echo $b->getElementByTagName('ed-icon ed-view'); 
/* должен вывести на экран режим просмотра сообщения, как если бы перешли по ссылке http://industrialconflicts.ru/adm/confmsg/?_a=view&id=1245606&_from=0 */

// далее, можно искать ID, Источник, Рубрики по глоссарию, Опубликовано / Не опубликовано
// ID - <th>ID</th>
// Источник - <th>Источник</th>
// Рубрики по глоссарию - <th>Рубрики по глоссарию</th>
// Не опубликовано  элемент крест <div class="ed-checkbox ed-checkbox-"></div>
// Опубликовано элемент галочка <div class="ed-checkbox ed-checkbox-1"></div>
?>
</body>
</html>