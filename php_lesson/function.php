<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Функции</title>
</head>

<body>
<?php
// основная работа функций будет тут, то есть подключение файла с определением (описанием) функции и вызов ее в коде

include('func_descr.php');

// вызов функции

func1();

echo '<br>';

// важен порядок подачи параметров в вызове функции, как написали в определении так и писать в вызове
func2 (12, 6);


// в функцию можно передавать значения переменных
$a = 8;
$b = 4;

func2($a, $b);

echo '<br>';

// так как функция func3 будет возвращать значение, это значение нужно записать (принять и сохранить)

$c = func3(6, 4);
echo '$c = '.$c.'<br>';

// ИЛИ
echo '<br>';

echo func3(7, 8);

echo '<br>';

echo '<pre>';
print_r(func4());
echo '</pre>';
 

echo '<br>';

func5(9);
func5(2, 4, 3);
func5(12, 84);
/*func5(); - выдаст предупреждение типа warning, так как первый параметр функции явл. обязательным, а значит его нужно задать, отлично от 2 и 3 параметра функции */

echo '<br>';

func6(5);
echo '$var = '.$var.'<br>'; // выдаст $var = и все, так как переменные определенные внутри функции они не видны за пределами этих функций

// сделаем наоборот, объявим переменную $var

$var2 = 2;
$var3 = 3;
func6(5);
echo '$var = '.$var.'<br><br>'; // выдаст $var3 = 3

echo '$var3 = '.$var3.'<br>';

?>
</body>
</html>