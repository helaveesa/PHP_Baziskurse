<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<?php
include('simple_html_dom.php'); // подключаем Simple HTML DOM

// чтобы получить HTML-код, нужной нам страницы
// Можно использовать стандартную функцию «file_get_contents»

define('INDEXURL', 'http://industrialconflicts.ru/adm/confmsg/?&_filter=4/');
$result_data = file_get_contents(INDEXURL);
// нужно подключить сессии так как будет идти работа с паролем и логином

$html = new simple_html_dom(); // создаем объект
$html->load($result_data); //загружаем HTML-код

$elements = $html->find(".previewBox"); // находим все элементы с классом «previewBox»
$i = 0; // создаём итератор или счетчик
$previewBox = array(); // создаём массив для хранения результатов

foreach($elements as $element) {
    $previewBox[$i]['id'] = $element->id; // идентификатор книги
    $previewBox[$i]['image'] = $element->children(0)->src; // адрес превью
    $previewBox[$i]['name'] = $element->children(1)->children(0)->plaintext; // получаем название книги
    $previewBox[$i]['author'] = $element->children(2)->children(0)->plaintext; // автор
        $previewBox[$i]['price'] = $element->children(3)->children(0)->plaintext; // цена
    $i++; //увеличиваем значение итератора
	echo "$element";
}




/* Найти ссылки и возвратить массив найденных объектов  http://parsing-and-i.blogspot.ru/2010/05/php-simple-html-dom-parser.html#sthash.ftct0nq6.dpuf
$ret = $html->find('a');
Найти (N)-ую по счету ссылку и возвратить найденный объект или null в случае, если объект не найден
$ret = $html->find('/msg/1266236/prokuratura_nowgorodskoy_oblasti_prowela_prowerku_so.html', 0);
так для всех сообщений ссылок */

/*Доступ к аттрибутам тегов

if(isset($e->href)) { //узнаем, существует ли аттрибут
        echo 'href exist!';
} */

/* В simplehtmldom есть методы для удаленной загрузки страниц.  После подключения файла библиотеки, нам доступны 2 функции для обработки HTML строк.
str_get_htm(str) и file_get_html(url) 
str_get_htm – на вход получает обычную строку, т.е. если вы получили HTML прибегнув к curl, или file_get_contents то вы просто передаете полученный текст этой функции.*/

/*При больших объемах данных, в библиотеке происходит утечка памяти. Поэтому после окончания одного цикла надо ее чистить.
Делает это метод clear.

$k = 5; 
while($k>0){
 $html = file_get_html('http://yandex.ru/yandsearch?text=hi'.$k.'&lr=11114'); // загружаем данные
 // как-то их обрабатываем
 $html->clear(); // подчищаем за собой
 unset($html);
 $k--;
}
*/


/* стандарто - в библиотеку заложена возможность перемещения по списку элементов объектного дерева. Для этого используются:
$e->children( [int $index] ), 
$e->parent(), 
$e->first_child(), 
$e->last_child(),
$e->next_sibling(), 
$e->prev_sibling().
- See more at: http://parsing-and-i.blogspot.ru/2010/05/php-simple-html-dom-parser.html#sthash.ftct0nq6.dpuf */


?> 
</body>
</html>