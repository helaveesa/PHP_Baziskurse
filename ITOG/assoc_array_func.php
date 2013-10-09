<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Func_for_assoc_array</title>
</head>

<body>
<?php
$user = array ("fio" => "Ivanov",
			   "vozrast" => 25,
			   "pol" => M);
echo $user[fio];
echo "Пол $user[pol] , возраст $user[vozrast]";

$keys = array_keys($user); // создает нумерованный массив ключей
$values = array_values($user); // создает нумерованный массив значений

/*функция each, которая возвращет пару: ключ==>значение, следовательно не можем записать в простую переменную, используем список (list)*/

list ($k, $v) = each ($user);

// оформим все это, через цикл while

while (list ($k, $v) = each ($user)) // цикл для каждого элемента массива
{
	echo "$k - $v <br>"; // выведет весь массив, что нам известен
}
?>
</body>
</html>