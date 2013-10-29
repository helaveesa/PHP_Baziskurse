<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Цикл FOREACH</title>
</head>

<body>
<?php
// есть список чего-либо и он находится в массиве, нужно обработать массив и построчно вывести данные в окно браузера
// задаем имя_массива и две переменные: [$key] (индекс или ассоциативное_имя значение) => значение ячейки массива, далее действия
// цикл foreach выполняет это для всех ячеек массива, пока не пройдет их все, либо остановить с помощью breake
/*причем при индексном массиве, можно не использовать [$key] (индекс) так как нас чаще интересуют именно значения, а следовательно [ключ] (индекс) можно опустить, тогда будут считываться значения из ячеек массива и записываться в переменную, например $value, которую мы указали в цикле foreach:
foreach ($array as [$key=>] $value) {
действие (например вывод на экран echo	
}*/

$code = array ('Moscou' => 495, 'St.Petersburg' => 812, 'Chelabinsk' => 351);

// ключевое слово as
foreach ($code as $key => $val) {
	echo "City: $key - code: $val <br>";
}


echo '<br>';

$numbers = array ('one', 'two', 'three', 'four', 'five');
// опускаем ключевой индекс
foreach ($numbers as $num) {
	echo $num.'<br>';	
}


echo '<br>';
// обход многомерного массива
// перед каждым новым примером лучше инициализировать переменную, в которую буду писать новые данные
$key = 0;
// создадим двумерный массив
$plants = array (
	'Фрукты' => array ('яблоко', 'банан', 'груша'),
	'Овощи' => array ('картофель', 'свекла'),
	'Ягоды' => array ('клубника', 'ежевика', 'голубика', 'смородина'));
	
foreach ($plants as $key => $kind) {
	echo "$key:<br>";
	// оформление маркированного списка
	echo '<ul>';
		foreach ($kind as $value) {
			echo "<li>$value</li>";	
		}
	echo '</ul>';
}
?>
</body>
</html>