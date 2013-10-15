<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<?php
# пример парсинга http://industrialconflicts.ru/msg/
include('simple_html_dom.php');

$text = file_get_html('http://industrialconflicts.ru/msg/');
$i=0;
# ищем ссылки по которым можно найти полное описание
foreach ($text -> find('h2.tovarhead a') as $temp){
    # сейчас мы имеем нечто вроде <a title="Nokia 1200" href="99/">Nokia 1200</a>
    # достаним урл
    if(preg_match('/href=".*">/i', $temp, $result)){
        $out['link'][$i] = 'http://industrialconflicts.ru/msg/'.substr($result[0], 6, strlen($result[0])-8);
    }
    
    #достаним название продукта
    $out['title'][$i] = strip_tags($temp);
    $i++;
}

$i=0;
# ищем описание продуктов
foreach ($text -> find('td.textinfo2 div.desc') as $temp){
    $out['text'][$i] = strip_tags($temp, '<br>');
    $i++;
}

print_r($out);
?>
</body>
</html>