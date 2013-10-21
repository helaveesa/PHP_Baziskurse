Я этот делал на клиенте, так проще. По поводу авторизации. Самое просто - выдрать заголовки из браузера. Или вот тут есть ответ для curl'a (рекомендую им и пользоваться)
<?php
if(preg_match('/href=".*">/i', $temp, $result)){
        $out['link'][$i] = 'http://industrialconflicts.ru/msg/'.substr($result[0], 6, strlen($result[0])-8);
    }
?>
1. SHD, кажется, имеет встроенный поиск по атрибутам
2. trailing slash лишний, там все ссылки от корня указаны, кажется
<?php
foreach($html->find('a') as $element) 
       echo $element->href . '<br>'; 
?>       
прям на главной странице))

http://simplehtmldom.sourceforge.net/   