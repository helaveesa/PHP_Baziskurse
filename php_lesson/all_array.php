<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Массивы array-i array-a array-m</title>
</head>

<body>
<?php
// массивы: - индексные - многомерные - ассоциативные
// индексные массивы [0] [1] [2] и т.д.
// ассоциативные массивы [name] [surname] [photos] и т.д.


// рассмотрим индексные массивы [0] [1] [2] и т.д.
// поэлементный способ создания массивов то есть одна ячейка, в которую помещается одно значение

$lang[] = 'HTML';
$lang[] = 'CSS';
$lang[] = 'LISP';
# присвоение индексов автоматически, начиная снуля

$lang[] = 'HTML';
$lang[] = 'CSS';
$lang[] = 'LISP';

echo '<br><br>';
// поэлементный вывод массива
echo $lang[0] . '<br>'; 
echo $lang[1] . '<br>'; 
echo $lang[2] . '<br>'; 

echo '<br><br>';
// вывод всего массива сразу, с помощью функции print_r

print_r ($lang); // функция print_r и в скобках имя массива
// форматирование 

echo '<pre>';
print_r ($lang);
echo '</pre>';

/*
благодаря использованию тега <pre>
мы получим вот что:

Array 
(
	[0] = > HTML
	[1] = > CSS
	[2] = > LISP
)
*/

echo '<br><br>';
echo '<br><br>';
// рассмотрим ассоциативные массивы [name] [surname] [photos] 
// способ создания ассоц. массива - поэлементный

# ключ - значение
$code['Россия'] = 7;
$code['США'] = 1;
$code['Германия'] = 49;

// не можем задавать ключ по-умолчанию, то есть задавать в явном виде, записывать вручную
// ключи могут записываться и русскими буквами тоже, и заключаться в кавычки - обязательно
// ключи - регистрозависимы

// выведем содержимое в браузер
echo '<br><br>';

echo '<pre>';
print_r ($code);
echo '</pre>';

/*
благодаря использованию тега <pre>
мы получим вот что:

Array 
(
	[Россия] = > 7
	[США] = > 1
	[Германия] = > 49
)
*/
echo '<br><br>';

// второй способ создания массива
$code2 = array('Россия' => 7, 'США' => 1, 'Германия' => 49);

echo '<pre>';
print_r ($code2);
echo '</pre>';

echo '<br><br>';

echo "Код России: $code[Россия]<br>";
// или
echo 'Код России:' . $code['Россия']. '<br>';
// Код России: 7


echo '<br><br>';
// рассмотрим многомерные массивы то есть массив внутри массива
// элементом одного массива является другой массив

// структура данных

$book1 = array ('author' => 'L. Tolstoi', 'title' => 'Voina i mir', 'year' => 2005);
$book2 = array ('author' => 'N. Gogol', 'title' => 'Mertvie dushi', 'year' => 2000);
$book3 = array ('author' => 'R. Bredberry', 'title' => 'Vino iz oduvanchikov', 'year' => 2002);
$book4 = array ('author' => 'Ch. Dikkens', 'title' => 'Priklucheniya Olivera Tvista', 'year' => 2006);

$shelf1[1] = $book1;
$shelf1[2] = $book2;

$shelf2[1] = $book3;
$shelf2[2] = $book4;

$bookshelf[1] = $shelf1;
$bookshelf[2] = $shelf2;

// выведем содержимое в браузер
echo '<br><br>';

echo '<pre>';
print_r ($bookshelf);
echo '</pre>';


?>
</body>
</html>
