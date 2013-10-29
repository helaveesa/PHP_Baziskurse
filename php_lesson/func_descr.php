<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Функции</title>
</head>

<body>
<?php
// определение функции

function func1 () {
	// любые php инструкции
	echo 'func1: Функция работает<br>';	
}

function func2 ($p1, $p2) {
	$d = $p1 / $p2;
	echo "func2: $p1 / $p2 = $d<br>";	
}


// функция может возвращать значения в то место программы, из которого была вызвана
/*функция является изолированным инструментом, следовательно моежно использовать тот же набор переменных, что и в ранее определенных функциях */

function func3($p1, $p2) {
		// вернуть результат в место вызова для этого используем return
		
		return $p1 + $p2; //функция вернет сумму двух заданных переменных
}

// функция может возвращать целые массивы

function func4() {
	$a = array ('one', 'two', 'three');
	return $a;	
}

// создание необязательных и обязательных параметров
// если есть необязательные параметры, то лни идут после обязательных
// $p1-обязат. парам., $p2,3-необязат.парам.
function func5($p1, $p2=15, $p3=10) {
	$sum = $p1 + $p2 + $p3;
	echo "func5: $p1 + $p2 + $p3 = $sum<br>";	
}

// видимость переменных
function func6($var) {
	$var3 = 5;
	echo 'func6: $var = '.$var.'<br>';	
	echo 'func6: $var2 = '.$var2.'<br>'; // попытаемся вывести перем. $var2 кот. задана во внешней программе
	// выдало func6: $var2 =  и все - $var2 не имеет значения, несмотря на то, что мы ее задавали
	echo 'func6: $var3 = '.$var3.'<br>'; // выдаст func6: $var3 = 5
}
?>
</body>
</html>