<?php
session_start(); // инициализируем механизм работы с сессиями
if(isset($_GET[quit])) 
{
	unset($_SESSION[admin]); // выход администратора
	header("location:index.php");
}
if(isset($_POST[ok])) // Добавление сообщения
{
	$name=trim(strip_tags($_POST[name])); // убираем теги и пробелы из имени
	$email=trim(strip_tags($_POST[email])); // убираем теги и пробелы из емайла
	$txt=trim(strip_tags($_POST[txt]));	 // убираем теги и пробелы из текста сообщения
	if(empty($name) or empty($email) or empty($txt)) // если что-то оказалось пустым...
	{
		$error="Не заполнены обязательные поля формы!";	// формируем текст сообщения, который выводится под формой
	} else // если все корректно заполнено...
	{
		$txt=str_replace("\n","<br>",$txt); // меняем символы переноса строки на <br>
		$f1=fopen("gost.txt","a"); // открываем файл для дозаписи
		fwrite($f1,"$name\t$email\t$txt\n"); // записываем все параметры сообщения через табуляцию (\t) и в конце ставим \n для того, чтобы следующее сообщение началось с новой строки
		fclose($f1); // закрываем файл
		header("location:index.php"); // делаем редирект для очистки массива $_POST с целью предотвращения повторного добавления сообщения при обновлении страницы.
	}
}
if(isset($_GET[del]) and isset($_SESSION[admin])) // обработчик удаления
{
	$mas=file("gost.txt"); //разбиваем файл в массив
	$mas=array_reverse($mas); // переворачиваем массив для сходства с тем массивом, который был на выводе
	for($i=0;$i<count($mas);$i++) // проходим циклом по массиву...
	{
		if($i!=$_GET[del]) $mas2[]=$mas[$i];	// и создаем второй массив, куда войдут все элементы, номер которых не равен удаляемому
	}
	$mas2=array_reverse($mas2); // второй массив также переворачиваем в исходное состояние
	$f1=fopen("gost.txt","w"); // открываем файл для перезаписи
	foreach($mas2 as $per) // и циклом записываем туда второй массив
	{
		fwrite($f1,$per);	
	}
	fclose($f1); // закрываем файл
	header("location:index.php"); // очищаем массив $_GET
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Гостевая книга</title>
</head>

<body>
<?php
if(isset($_SESSION[admin])) // проверка существования администратора
	echo "Здравствуй, Админ! <a href='?quit=ok'>выход</a>";
?>
<table align="center"><tr><td>
<fieldset><legend>Добавить:</legend>
<form method="post">
<table>
  <tr>
    <td>Имя:</td>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <td>E-Mail:</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>Текст:</td>
    <td><textarea name="txt"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input type="submit" name="ok" value="Добавить">
    <div style="color:red;"><?php echo $error; ?></div>
    </td>
  </tr>
</table>
</form>
</fieldset>
</td></tr></table>
<?php
$mas=file("gost.txt"); // разбиваем файл построчно и записываем каждую строку в отдельный элемент массива
$mas=array_reverse($mas); // переворачиваем массив для того, чтобы последнее сообщение отображалось первым
$kol_on_page=10; // задаем количество сообщений на странице
$vsego=count($mas); // вычисляем сколько всего сообщений в гостевой книге
$kol_pages=ceil($vsego/$kol_on_page); // вычислям количество страниц
if(isset($_GET[page])) $page=$_GET[page]; else $page=1; // получаем номер страницы
$ot=($page-1)*$kol_on_page; // первое число диапазона
$do=$page*$kol_on_page-1; // второе число диапазона
for($i=0;$i<count($mas);$i++) // запускаем цикл прохода по всем сообщениям
{
	if($i<$ot or $i>$do) continue; // если сообщение НЕ входит в диапазон - продолжаем цикл без вывода
	list($n,$m,$s)=explode("\t",$mas[$i]); // разбиваем каждый элемент массива по \t и записываем составляющие строки в отдельные переменные
	echo "$n $m ";
	if(isset($_SESSION[admin])) echo "<a href='?del=$i'>удалить</a>"; // вывод ссылки на удаление
	echo "<hr> $s <br><br>";	// вывод сообщений
}
for($i=1; $i<=$kol_pages;$i++) // цикл вывода ссылок на страницы
{
	echo "<a href='?page=$i'>$i</a> ";	 // ссылки отсылают методом GET параметр по имени page, имеющий значение - номер страницы
}
?>
</body>
</html>